/* 
Elisabete Vail
August 1, 2013
Hibernate Java Sample (main class)
*/

import org.hibernate.cfg.Configuration;
import org.hibernate.HibernateException;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.service.ServiceRegistry;
import org.hibernate.service.ServiceRegistryBuilder;
//import com.hib.init.Create_SessionFactory;

public class Create_HockeyPlayer{

    private static SessionFactory sessionFactory;
    private static ServiceRegistry serviceRegistry;

//Pull the related configuration information 
static {
    Configuration configuration = new Configuration();
    configuration.configure();
    serviceRegistry = new ServiceRegistryBuilder().applySettings(configuration.getProperties()).buildServiceRegistry();        

//Create session Factory Object   
   try {
        sessionFactory = configuration.buildSessionFactory(serviceRegistry);
    } catch (HibernateException he){
        System.err.println("Creation of SessionFactory has failed: " + he);
        throw new ExceptionInInitializerError(he);
    }
}

//Return the SessionFactory
    public static SessionFactory getSessionFactory(){
        return sessionFactory;
    }

    public static void main(String[] args){

    //Call on my Create_SessionFactory class to build new session
        SessionFactory sessionFactory = Create_HockeyPlayer.getSessionFactory();
        Session session = sessionFactory.openSession();
        session.beginTransaction();

    // Call the set methods in my Hockey_Player class to create new player 
        Hockey_player player = new Hockey_player();
        player.setId(123);
        player.setFirstName("Betty");
        player.setLastName("White");

    // Save the player's information, commit transaction and close session
        session.save(player);
        session.getTransaction().commit();
        session.close();

    }//main
}//class