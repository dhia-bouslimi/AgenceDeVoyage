/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;
import entities.Voiture;
import java.sql.Date;
import java.util.logging.Logger;

public class LocationVoiture {
   
  private int id_user,voiture_id;
  private Date date_debut,date_fin;

   public LocationVoiture() {
    }
   
    public LocationVoiture(int voiture_id, Date date_debut, Date date_fin) {
        this.voiture_id = voiture_id;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
    }

    public LocationVoiture(int voiture_id, Date date_debut, Date date_fin,int id_user) {
        this.id_user = id_user;
        this.voiture_id = voiture_id;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
    }

    public LocationVoiture(int i, int i0, Date date, Date date0, int i1) {
//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public LocationVoiture(int i, int i0, int x, Date date_d, Date date_f) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public LocationVoiture(int i, int i0, int x, Date date_d, Date date_f, int i1) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public LocationVoiture(String idV, Date date_d, Date date_f) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

   

    
    public int getId_user() {
        return id_user;
    }

    public void setId_user(int id_user) {
        this.id_user = id_user;
    }

    public int getVoiture_id() {
        return voiture_id;
    }

    public void setVoiture_id(int voiture_id) {
        this.voiture_id = voiture_id;
    }

    public Date getDate_debut() {
        return date_debut;
    }

    public void setDate_debut(Date date_debut) {
        this.date_debut = date_debut;
    }

    public Date getDate_fin() {
        return date_fin;
    }

    public void setDate_fin(Date date_fin) {
        this.date_fin = date_fin;
    }

    @Override
    public String toString() {
        return "LocationVoiture{" + "id_user=" + id_user + ", voiture_id=" + voiture_id + ", date_debut=" + date_debut + ", date_fin=" + date_fin + '}';
    }
   


   

    
}
