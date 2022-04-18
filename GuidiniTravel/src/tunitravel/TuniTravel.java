/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tunitravel;

import entities.LocationVoiture;
import services.VoitureService;
import services.LocationVoitureService;
import tools.MaConnexion;

import entities.Voiture;
import java.sql.Date;

/**
 *
 * @author HP
 */
public class TuniTravel {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
         
        MaConnexion m = MaConnexion.getInstance();
        VoitureService ps = new VoitureService();
                LocationVoitureService s = new LocationVoitureService();

    //   Hotel p=new Hotel(50,47,"Movenpick Sousse","mmmm",5,"5*",230);

    //Voiture p1=new Voiture("00000","bbbbbbb","Rover","pppp","mmmm", (int) 40,"image13");

  //  ps.deletevoiture("13");
   // ps.modifierVoiture(p1);
    //ps.ajouterVoiture(p1);
 
    //ps.modifierVoiture(p1);
    //ps.ajouterVoiture(p1);
    //ps.modifierVoiture(p1);
    //ps.modifierVoiture(p1);
       // System.out.println(ps.afficherVoiture());
        // ps.ajouterVoiture(p1);
        // ps.modifierVoiture(p1);
//ps.supprimer(p1);
//ps.ajouterVoiture(p1);
//ps.supprimer(p1);
//ps.modifierVoiture(p1);
//ps.supprimer(p1);
      //ps.modifierVoiture(p1);
    //  ps.supprimer(p1);
     //  System.out.println(ps.afficherVoiture());
     // LocationVoitureService rs = new LocationVoitureService();
     //ps.ajouterVoiture(p1);
     /*
     
          LocationVoiture r1= new LocationVoiture(34,new Date(2025-18-04),new Date(1970-10-02));

               LocationVoiture r2= new LocationVoiture(36,new Date(2025-18-04),new Date(1970-10-02));

                    LocationVoiture r3= new LocationVoiture(35,new Date(2025-18-04),new Date(1970-10-02));
     LocationVoiture r4= new LocationVoiture(37,new Date(2025-18-04),new Date(1970-10-02));
*/
     
                    
     //s.supprimerReservationVoiture(33);
  //   s.ajouterLocationVoiture(r1);
    // s.ajouterLocationVoiture(r2);
     //s.ajouterLocationVoiture(r3);
       //   s.ajouterLocationVoiture(r4);

         // LocationVoiture r1= new LocationVoiture(47,36,new Date(2022-18-04),new Date(2022-10-02),0);
         //System.out.println(s.afficherLocationVoiture()); 
     LocationVoiture r= new LocationVoiture(33,new Date(2025-18-04),new Date(1970-10-02),5);    
         s.modifierLocationVoiture1(r,33);

   // s.ajouterLocationVoiture(r1);
    // s.supprimerLocationVoiture(r);
       // System.out.println(   s.afficherLocationVoiture());
     
   //  rs.ajouterLocationVoiture(r);
     //rs.modifierLocationVoiture(r);
   //   rs.supprimerLocationVoiture(r);
     // rs.getHotelByRef(60);
    // System.out.println(rs.afficherLocationVoiture());
     
    }
   
    
}
