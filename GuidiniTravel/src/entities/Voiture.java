/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

import javafx.scene.image.ImageView;

public class Voiture {
    private int id,prix;
    private String marque,model,couleur,description,image,serie;
    private ImageView photo;
 

    public Voiture() {
    }

    public Voiture(int id, String serie,String marque, String model, String description, String couleur, int prix ,String image) {
        this.id = id;
        this.serie = serie;
        this.marque = marque;
        this.model = model;
        this.description = description;
        this.couleur = couleur;
        this.prix= prix;
        this.image= image;
      
    }

 
    public Voiture( String serie,String marque, String model, String description, String couleur, int prix ,String image) {
        
        this.serie = serie;
        this.marque = marque;
        this.model = model;
        this.description = description;
        this.couleur = couleur;
        this.prix= prix;
        this.image= image;
      
    }

   public Voiture(String serie,String marque, String model, String description, String couleur, int prix ,String image, ImageView photo) {
       
        this.photo = photo;
        this.serie = serie;
        this.marque = marque;
        this.model = model;
        this.description = description;
        this.couleur = couleur;
        this.prix= prix;
        this.image= image;
      
    }
    
    
    
    


    

    public Voiture(int i, String serie, String marque, String model, String description, String couleur, String prix, String img) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public Voiture(int i, int serie1, String marque, String model, String m, String couleur, int prix1, String img) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

   

 
    
    @Override
    public String toString() {
        return "Voiture{" + "id=" + id + ", serie=" + serie + ", marque=" + marque + ", model =" + model + ", description =" + description  + ", couleur =" + couleur  +", prix =" + prix  + '}';
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }
    
public String getSerie() {
        return serie;
    }

    public void setSerie(String serie) {
        this.serie = serie;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getCouleur() {
        return couleur;
    }

    public void setCouleur(String couleur) {
        this.couleur = couleur;
    }

 

    public String getMarque() {
        return marque;
    }

    public void setMarque(String marque) {
        this.marque = marque;
    }

    public String getModel() {
        return model;
    }

    public void setModel(String model) {
        this.model = model;
    }

   
  
  

    public double getPrix() {
        return prix;
    }

    public void setPrix(int prix) {
        this.prix = prix;
    }

    
    public ImageView getPhoto() {
        return photo;
    }

    public void setPhoto(ImageView photo) {
        this.photo = photo;
    }

    
}
