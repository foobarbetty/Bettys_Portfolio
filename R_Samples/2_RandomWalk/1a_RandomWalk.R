# Author:	Elisabete Vail
# Date:		3/15/14
# Project:	Random Walk
#---------------------------------------------------------------------------
# Summary: 
#	Write a program to monitor the distance from origin at end of Random Walk
# 	Display the end position frequency of 100 Random Walks as graph
#---------------------------------------------------------------------------
# Prepare Workspace
	rm(list=ls())
	ls()
	home <- "/path/to/your/R/Workspace/directory"
	setwd(home)
	getwd()

#===========================================================================
# Part A: Create the Random Walk Machine
#===========================================================================
# Create 100 step RandomWalk function, that stores each step as row in Matrix	
	numSteps	<- 100	
	rW_1 		<- function(x){matrix(rbinom(numSteps,1,1/2),numSteps,1)}

# Run RandomWalk function 100 times and store results per run as Matrix column
	i 			<- 1
	rW_2		<- rW_1(numSteps)
	
	for(i in 1:(numSteps-1)){rW_2 <- cbind(rW_2,rW_1(numSteps))}

# Replace all the 0's with -1's in our Matrix
	rW_2[rW_2 == 0]<-(-1)
	
# Keep track of RandomWalk current position at each step, for all 100 runs	
	i			<- 1
	rW_3		<- cumsum(rW_2[,i])
	
	for(i in 1:numSteps){rW_3 <- cbind(rW_3, cumsum(rW_2[,i]))}
	
#===========================================================================
# Part B: Create a Graph representation of 100 Walks
#===========================================================================
# Now let's visualize this as a graph	
	x <- c(-100:100)	# Total possible range per Random Walk 
	y <- rW_3[100,]		# End Position for each of our 100 Random Walks
	
# Save the following graph results as a PDF	
	pdf(file="1b_RandomWalk.pdf",width=7, height=4)
	
# Frequency of ending position vs. total distance opportunity	
	hist(y,x,
		main="Random Walk",
		ylab="Position frequency per Trial (100 Walks)",
		xlab="End position per Walk (100 steps)",
		tick=TRUE
	)
	axis(1,at=c(min(y),max(y)),tick=TRUE)

# Close out the graph windows
	dev.off()
