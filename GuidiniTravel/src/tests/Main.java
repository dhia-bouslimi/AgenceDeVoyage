/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tests;
//import entities.Hotel;
import services.VoitureService;
import tools.MaConnexion;

public class Main {
     public static void main(String[] args) {
        MaConnexion m = MaConnexion.getInstance();
        //Personne p=new Personne(9999, "Mezri", "Aziz");
        VoitureService ps = new VoitureService();
       // ps.ajouterPersonne(p);
       // System.out.println(ps.afficherHotel());
         //  Hotel p=new Hotel(50,47,"Movenpick Sousse","mmmm",5,"5*",230);

     // ps.ajouterHotel(p);
    }
}
