  /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import entities.Voiture;
import tools.MaConnexion;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;

public class VoitureService {
    Connection mc;
    PreparedStatement ste;

    public VoitureService() {
        mc=MaConnexion.getInstance().getCnx();
    }
    
    public void ajouterVoiture(Voiture h){
        String sql ="insert into voiture(serie,marque,model,description,couleur,prix,image) Values(?,?,?,?,?,?,?)";
        try {
            ste=mc.prepareStatement(sql);
            ste.setString(1, h.getSerie());
            ste.setString(2, h.getMarque());
            ste.setString(3, h.getModel());
            ste.setString(4, h.getDescription());
            ste.setString(5, h.getCouleur());
            ste.setInt(6, (int) h.getPrix());
            ste.setString(7, h.getImage());
            ste.executeUpdate();
            System.out.println("Voiture Ajoutée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
    }
    public void supprimer(Voiture h) {

        
            String sql = "delete from voiture where serie = ?";
try {
            ste = mc.prepareStatement(sql);
            ste.setString(1, h.getSerie());
            ste.executeUpdate();
            System.out.println("Voiture supprimé avec succées");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
    public void modifierVoiture(Voiture h) {
        String req = "update voiture set  marque = ? , model = ? , description= ? , couleur= ? , prix= ? , image= ? where serie = ?";

        try {
            ste = mc.prepareStatement(req);
             ste.setString(1, h.getMarque());
            ste.setString(2, h.getModel());
            ste.setString(3, h.getDescription());
            ste.setString(4, h.getCouleur());
            ste.setInt(5, (int) h.getPrix());
            ste.setString(6, h.getImage());
            ste.setString(7, h.getSerie());
 //          
            ste.executeUpdate();
System.out.println("Voiture modifié avec succées");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
   
    public List<Voiture> afficherVoiture(){
        List<Voiture> voitures = new ArrayList<>();
        String sql="select * from voiture";
        try {
            ste=mc.prepareStatement(sql);
            ResultSet rs=ste.executeQuery();
            while(rs.next()){
                Voiture h = new Voiture();
                h.setId(rs.getInt("id"));
                h.setSerie(rs.getString("Serie"));
                h.setMarque(rs.getString("Marque"));
                h.setModel(rs.getString("Model"));
                h.setPrix(rs.getInt("prix"));
                voitures.add(h);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        return voitures;
    }  
        public List<Voiture> readAll() throws SQLException {
       String req="select * from voiture  ";
        List<Voiture> list = new ArrayList<>();
         Statement ste=mc.createStatement();
            ResultSet rs = ste.executeQuery(req);
            while(rs.next()){
                
               
               
                ImageView v = new ImageView();
                System.out.println(rs.getString(8));
                
                v.setImage(new Image("http://127.0.0.1/imagevoiture/"+rs.getString(8)));
                v.setFitWidth(100);
                v.setFitHeight(100);
               
                //ystem.out.println(v.getImage().toString());
                Voiture p2=new Voiture(rs.getInt(1),rs.getString(2),rs.getString(3),rs.getString(4), rs.getString(5),rs.getString(6),rs.getInt(7),rs.getString(8));
                
                p2.setPhoto(v);
                list.add(p2);
            
    
}
        return list;
    }
        public void deletevoiture(String serie) {
    
           String sql = "delete from voiture where serie = ?";
try {
            ste = mc.prepareStatement(sql);
            ste.setString(1,serie);
            ste.executeUpdate();
            System.out.println("voiture supprimé avec succées");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
            
        
    
    }

    public void supprimer(String Serie) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
 public boolean chercher(String serie)  {
        String req="select * from voiture";
        List<String> list = new ArrayList<>();
        
        try {
            Statement stm = mc.createStatement();
            ResultSet rs = stm.executeQuery(req);
            while(rs.next()){
                list.add(rs.getString(2));
                
            }
        } catch (SQLException ex) {
            Logger.getLogger(VoitureService.class.getName()).log(Level.SEVERE, null, ex);
        }
      
        return list.contains(serie);
    }
 
}
