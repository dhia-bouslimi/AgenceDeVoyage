/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;

import entities.LocationVoiture;
import entities.Voiture;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.Date;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import services.LocationVoitureService;
import services.VoitureService;

/**
 * FXML Controller class
 *
 * @author pc
 */
public class ReservationLocationController implements Initializable {
    @FXML
    private Label idvoiture;
        @FXML
    private TextField serieres;
            @FXML
    private Label labelT;
                @FXML
    private TableColumn<LocationVoiture,Integer> tablevoiture;
       @FXML
    private TableColumn<LocationVoiture,Integer> tableid;

    @FXML
    private TableColumn<LocationVoiture,Date> table_dated;

    @FXML
    private TableColumn<LocationVoiture,Date> table_datef;
       @FXML
    private TableColumn<LocationVoiture,Integer> table_user;

    
    
    @FXML
    private TextField modelres;
    
      @FXML
    private DatePicker datedebpicker;

    @FXML
    private DatePicker datefinpicker;

     @FXML
    private TextField seriefield;

    @FXML
    private TextField marquefield;

    @FXML
    private TextField modelfield;

    @FXML
    private Button ajouterbtn;

    @FXML
    private TextField descriptionfield;

    @FXML
    private Button imagee;

    @FXML
    private ImageView importeimage;

    @FXML
    private Button modifierbtn;

    @FXML
    private Button deletebtn;

    @FXML
    private TableView<Voiture> table1;
    @FXML
    private TableView<LocationVoiture> table2;
    

    @FXML
    private TableColumn<Voiture,String> tableSerie;

    @FXML
    private TableColumn<Voiture,String> tablemarque;

    @FXML
    private TableColumn<Voiture,String> tablemodel;

    @FXML
    private TableColumn<Voiture,String> tabledescription;

    @FXML
    private TableColumn<Voiture,String> tablecouleur;

    @FXML
    private TableColumn<Voiture,Integer> tableprix;

    @FXML
    private TableColumn<Voiture,String> tableimage;

    @FXML
    private TextField couleurfield;

    @FXML
    private TextField prixfield;
     

    private Voiture cc=null;
 String img="";
    List<String> type;

    /**
     * Initializes the controller class.
     */
    public void initialize(URL url, ResourceBundle rb) {
         affichage1();
         affichageR();
        // TODO
        
         table1.setOnMouseClicked(new EventHandler<MouseEvent>(){

            @Override
            public void handle(MouseEvent event) {
                cc = (Voiture)table1.getSelectionModel().getSelectedItem();
                System.out.println(cc);
                
            modelres.setText(cc.getModel());
            String Pstr = Integer.toString((int) cc.getPrix());
             labelT.setText(Pstr);
           
                serieres.setText(cc.getSerie());
               
             String Serie=Integer.toString(cc.getId()); 
           idvoiture.setText(Serie);
               // java.sql.Date datedebut = java.sql.Date.valueOf(datedebpicker.getValue());
       //java.sql.Date datefin = java.sql.Date.valueOf(datefinpicker.getValue());
               
        
                          
                
       

          
                     
            }
            
          });
    }    
    @FXML
    private void affichage1(){
        try {
       VoitureService sp = new VoitureService();
       List events=sp.readAll();
       ObservableList et=FXCollections.observableArrayList(events);
       table1.setItems(et);
       
       tableSerie.setCellValueFactory(new PropertyValueFactory<>("serie"));
       tablemarque.setCellValueFactory(new PropertyValueFactory<>("marque"));
       tablemodel.setCellValueFactory(new PropertyValueFactory<>("model"));
       tabledescription.setCellValueFactory(new PropertyValueFactory<>("description"));
       tablecouleur.setCellValueFactory(new PropertyValueFactory<>("couleur"));
        tableprix.setCellValueFactory(new PropertyValueFactory<>("prix"));
       tableimage.setCellValueFactory(new PropertyValueFactory<>("photo"));
       
       
       
        } catch (SQLException ex) {
                Logger.getLogger(AjouterVoitureController.class.getName()).log(Level.SEVERE, null, ex);
            }
       
    }
    
     @FXML
    private void reserverVoiture(ActionEvent event) {
       
        java.sql.Date date_d = java.sql.Date.valueOf(datedebpicker.getValue());
        java.sql.Date date_f = java.sql.Date.valueOf(datefinpicker.getValue());
        
        
        String idv = idvoiture.getText();
        
        int x= Integer.parseInt(idv);
        
         LocationVoitureService rs = new LocationVoitureService();
         LocationVoiture r= new LocationVoiture(x,date_d,date_f);
         Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
		alert.setTitle("Ajout Réservation Voiture");

		// alert.setHeaderText("Results:");
		alert.setContentText("Voulez vous continuer ?");

		alert.showAndWait();
         rs.ajouterLocationVoiture(r);
         
        
        
        FXMLLoader loader = new FXMLLoader (getClass().getResource("AjouterLocation.fxml"));
        try {
        Parent root = loader.load();
        
        }catch (IOException ex)
        { System.out.println(ex.getMessage());
        }
    }
    
    @FXML
    private void affichageR() {
         try {
       LocationVoitureService sp = new LocationVoitureService();
       List events=sp.readAll();
       ObservableList et=FXCollections.observableArrayList(events);
       table2.setItems(et);
       tablevoiture.setCellValueFactory(new PropertyValueFactory<>("id"));
       tablevoiture.setCellValueFactory(new PropertyValueFactory<>("voiture_id"));
       tablevoiture.setCellValueFactory(new PropertyValueFactory<>("date_deb"));
       tablevoiture.setCellValueFactory(new PropertyValueFactory<>("date_fin"));
       table_user.setCellValueFactory(new PropertyValueFactory<>("user_id"));
       
      
       
       
       
        } catch (SQLException ex) {
                Logger.getLogger(ReservationLocationController.class.getName()).log(Level.SEVERE, null, ex);
            }
    }
     
    
}
