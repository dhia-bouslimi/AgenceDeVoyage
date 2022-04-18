/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;
import entities.Voiture;
import entities.LocationVoiture;
import java.io.FileOutputStream;
import tools.MaConnexion;
import java.sql.PreparedStatement;
import java.text.DateFormat;
import java.text.DecimalFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
/**
 *
 * @author HP
 */
public class LocationVoitureService {
    Connection mc;
    PreparedStatement ste;

    public LocationVoitureService() {
        mc=MaConnexion.getInstance().getCnx();
    }
    
    
     public void modifierLocationVoiture1(LocationVoiture h,int id_V) {
        String req = "update location set  date_debut = ? , date_fin = ? where Voiture_id = ?"; ;

        try {
            ste = mc.prepareStatement(req);
            
            ste.setDate(1, h.getDate_debut());
            ste.setDate(2, h.getDate_fin());
            ste.setInt(3,id_V);

            ste.executeUpdate();

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
    
    public void ajouterLocationVoiture(LocationVoiture h){
        String sql ="INSERT INTO `location` (`voiture_id`, `date_debut`, `date_fin`, `id_user`) VALUES (?,?,?,?)";
        try {
            ste=mc.prepareStatement(sql);
            ste.setInt(1, h.getVoiture_id());
            ste.setDate(2, h.getDate_debut());
            ste.setDate(3, h.getDate_fin());
            ste.setInt(4, h.getId_user());
            
            ste.executeUpdate();
            System.out.println("Location Effectuée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
    }
    public void supprimerLocationVoiture(LocationVoiture h) {

        
            String sql = "delete from location where id_user = ?";
try {
            ste = mc.prepareStatement(sql);
            ste.setInt(1, h.getId_user());
            ste.executeUpdate();
            System.out.println("LocationVoiture supprimé avec succées");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
    public void modifierLocationVoiture(LocationVoiture h) {
        String req = "update location set  date_debut = ? , date_fin = ? where Voiture_id = ?";

        try {
            ste = mc.prepareStatement(req);
       
            ste.setDate(1, h.getDate_debut());
            ste.setDate(2, h.getDate_fin());
             ste.setInt(3, h.getVoiture_id());
           
            ste.executeUpdate();
System.out.println("LocationVoiture modifié avec succées");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
    public List<LocationVoiture> afficherLocationVoiture(){
        List<LocationVoiture> voitures = new ArrayList<>();
        String sql="select * from location";
        try {
            ste=mc.prepareStatement(sql);
            ResultSet rs=ste.executeQuery();
            while(rs.next()){
                LocationVoiture h = new LocationVoiture();
                h.setVoiture_id(rs.getInt("voiture_id"));
                h.setDate_debut(rs.getDate("date_debut"));
            h.setDate_fin(rs.getDate("date_fin"));
                            h.setId_user(rs.getInt("id_user"));

            
           
             
                voitures.add(h);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        return voitures;
    } 
 public List<LocationVoiture> readAll() throws SQLException {
       String req="select * from location";
        List<LocationVoiture> list = new ArrayList<>();
         Statement ste=mc.createStatement();
            ResultSet rs = ste.executeQuery(req);
            while(rs.next()){
                
               
               
                
               
                //ystem.out.println(v.getImage().toString());
                LocationVoiture p2=new LocationVoiture(rs.getInt(2),rs.getDate(3),rs.getDate(4),rs.getInt(5));
                //E131DHHJMNE code wifi whatelse?
               
                list.add(p2);
            
    
}
        return list;
    }
        public void supprimerReservationVoiture(int voiture_id) {

        
            String sql = "delete from location where voiture_id = ?";
try {
            ste = mc.prepareStatement(sql);
            ste.setInt(1, voiture_id);
            ste.executeUpdate();
            System.out.println("ReservationVoiture supprimé avec succées");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
    
    
}
