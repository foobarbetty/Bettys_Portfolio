# Author:	Elisabete Vail
# Date:		Originally Written 11/2/12, updated 6/4/14
# Project:	Dev Log Summary
#---------------------------------------------------------------------------
# Summary: 
#	1) Pull log information from dev log for given date range
#	2) Display daily download total via line graph
#	3) Display running download total via text box, along with...
# 		- total downloads per platform
# 		- total of unique ip addresses
# 		- total of unique HTTP codes
#
#---------------------------------------------------------------------------
# Prepare Workspace
library(alfa) 
library(chron)
library(gplots)
library(gtools)
library(gdata)

rm(list=ls())
ls()
home 	  <- "/Path/to/directory/containing/devLogFile"
setwd(home)
getwd()

#===========================================================================
# Part A: Pull in log data and filter on daterange
#===========================================================================
# Read in log file as table and store in "devLog"
devLog	  <- read_access_log("2a_Apache.log",format=c("common","combined"))
	
# Provide date range and pull relevant rows/columns into a subset called "smLog"
start 	  <- chron("10/02/12","00:00:00")
end 	  <- chron("10/06/12","23:59:59")
	
smLog 	  <- subset(
		devLog[,c("Client_IP","Timestamp","Request","HTTP_status")],
		devLog[,"Timestamp"]>=start & devLog[,"Timestamp"]<=end
		)
	
#===========================================================================
# Part B: Calculate Daily/Running download totals
#===========================================================================
# Then pull the dates per day, from the subset	
time_seq  <- data.frame(chron(seq(start,end+1,1)))
	
# Break subset up by day and calculate total daily downloads	
dayTotal  <- matrix(0,nrow(time_seq)-1,1)
	
for(i in 1:nrow(time_seq)-1){ dayTotal[i,1] <-
	sum(smLog[,"Timestamp"]>=time_seq[i,1] & smLog[,"Timestamp"]<=time_seq[i+1,1])
}	
	
#===========================================================================
# Part C: Calculate Downloads per platform, Unique IP/HTTP totals
#===========================================================================
# Pull and count total number of downloads per platform
platTots  <- data.frame(
		"Category"= c(	"Linux/Deb:","Linux/Rpm:","Linux/Tar:",
				"Linux/Solaris:","Mac OS:","Windows:"),		
		"Total"= c(	length(grep(".deb",smLog[,"Request"])),
				length(grep(".windows",smLog[,"Request"])),
				length(grep("linux.x86_64.tar.gz",smLog[,"Request"])),
				length(grep(".sunos",smLog[,"Request"])),
				length(grep(".rpm",smLog[,"Request"])),
				length(grep(".macosx",smLog[,"Request"])))
		)	

# Pull and count running download total and total unique IP's and HTTP codes	
runUnique <- data.frame(	
		"Category"= c( "Running Total:","Unique IP's:","Unique HTTP's:"),
		"Total"= c( 	sum(platTots[,"Total"]),
				length(unique(smLog[,"Client_IP"])),
				length(unique(smLog[,"HTTP_status"])))
		)			
							
# Combine both dataframes as single table			
totalList <- rbind(runUnique,platTots)
		
#===========================================================================
# Part D: Display data via graph and text box
#===========================================================================
# Create two plots for totalList and linegraph and save to PDF

# Save following output as an 8"x4" PDF file
quartz( file="2c_Apache_Graph.pdf",type="pdf", width=8, height=4)

par(	bg="#363D45",				# Format following graphs
	fg="#A2988A",
	mai=c(1,1,0.25,0.5),
	las=2,
	cex.axis=0.75,
	col.axis="white",
	col.main="#C1CD23",
	col.sub="#C1CD23",
	col.lab="#C1CD23",
	mfcol=c(1,2),
	omi=c(0,0,0.5,0)
)
		
plot(	c(dayTotal)~time_seq[1:5,],		# Line plot
	type="o",
	col="#C1CD23",
	pch=16,
	lwd=2,
	yaxt="n",
	cex.lab=0.8,
	xlab="Days included in Date Range",
	ylab="Number of Downloads per Day",
	ylim=c(0,max(dayTotal))			
)
	
axis(	side=2,at=c(0,dayTotal),tick=TRUE)	# x axis for line plot
	
textplot(					# Download totals
	totalList,	
	show.rownames=FALSE, 
	show.colnames = FALSE,
	cex=1,
	rmar=1.5,
	col.data="white",
	valign="top",
	halign="left",
	mar=c(0,0,1,0)
)

title(	main="Apache Log Download Totals",outer=TRUE)

dev.off()		
