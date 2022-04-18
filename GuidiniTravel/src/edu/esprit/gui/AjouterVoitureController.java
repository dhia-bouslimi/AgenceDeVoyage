/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.gui;
import entities.Voiture;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.nio.file.FileSystem;
import java.nio.file.FileSystems;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.StandardCopyOption;
import java.sql.Date;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ArrayList;
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
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.SortEvent;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;
import javax.swing.JOptionPane;
import static jdk.nashorn.internal.objects.NativeJava.type;
import services.VoitureService;


/**
 * FXML Controller class
 *
 * @author pc
 */
public class AjouterVoitureController implements Initializable {
    
    @FXML
    private ComboBox<String> trantxt;
      @FXML
    private ComboBox<String> coultxt;
    
    @FXML
    private TextField seriefield;

    @FXML
    private TextField marquefield;

    @FXML
    private TextField modelfield;

    @FXML
    private Button ajouterbtn;

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

    private TextField couleurfield;

    @FXML
    private TextField prixfield;
     

    private Voiture cc=null;
 String img="";
    List<String> type;
    @FXML
    private Label errormarque;
    @FXML
    private Label errormodel;
    @FXML
    private Label errorserie;
    @FXML
    private Label errorprix;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       affichage();
      
 table1.setOnMouseClicked(new EventHandler<MouseEvent>(){

            @Override
            public void handle(MouseEvent event) {
                cc = (Voiture)table1.getSelectionModel().getSelectedItem();
                System.out.println(cc);
            seriefield.setText(cc.getSerie());
               marquefield.setText(cc.getMarque());
                  modelfield.setText(cc.getModel());
                     
                
                                trantxt.setValue(cc.getDescription());

                   coultxt.setValue(cc.getCouleur());
                           int prix1= (int) cc.getPrix();
               String prix=Integer.toString(prix1); 
           prixfield.setText(prix);
                   
                
                importeimage.setImage(new Image("http://127.0.0.1/imagevoiture/"+cc.getImage()));
               // java.sql.Date datedebut = java.sql.Date.valueOf(datedebpicker.getValue());
       //java.sql.Date datefin = java.sql.Date.valueOf(datefinpicker.getValue());
       
               
            }
          });
  seriefield.textProperty().addListener(new ChangeListener<String>()
            {
                public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
                   if(newValue.isEmpty())
        {
                       errorserie.setText("Champs vide!");
                 
        }
                   else if(newValue.length()>6)
        {
                       errorserie.setText("Max longueur 20");
          
        }
                   else
        {
                errorserie.setText("   ");
              
                }
                }
                
                
            });
 
    String auto="Automatique";
    String man="Manuelle";
    String semi="semi_automatique";
    String ble="bleu";
       String noi="noir";
        String gr="gris";
        String bl="blanche";
        
    trantxt.getItems().addAll(auto,man,semi);
    coultxt.getItems().addAll(ble,noi,gr,bl);
    
        
        type =new ArrayList();
        type.add("*.jpg");
         type.add("*.png");
         
    } 
    
 
      
     @FXML
    private void addvoiture(ActionEvent event) {
          String Serie = seriefield.getText();
          //String serie1=String.parseInt(Serie);
         String marque = marquefield.getText();
          String model = modelfield.getText();
           String m=trantxt.getValue();
            String couleur = coultxt.getValue();
           String prix = prixfield.getText();
             int prix1=Integer.parseInt(prix);

        if(seriefield.getText().trim().isEmpty()|| prixfield.getText().trim().isEmpty()||marquefield.getText().trim().isEmpty()||modelfield.getText().trim().isEmpty()){
       Alert fail= new Alert(Alert.AlertType.INFORMATION);
        fail.setHeaderText("failure");
        fail.setContentText("Champs vide !");
        fail.showAndWait();    
     }
            
              
       Voiture p1=new Voiture(50,Serie,marque,model,m,couleur,prix1,img);
       VoitureService ps = new VoitureService();
       
              
       if (ps.chercher(Serie)==false)
       {
       ps.ajouterVoiture(p1);
       FXMLLoader loader = new FXMLLoader(getClass().getResource("AjouterVoiture.fxml"));
       
       try{  
        
       Parent root = loader.load();
        affichage();
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
		alert.setTitle("Ajout Voiture");

		// alert.setHeaderText("Results:");
		alert.setContentText("Voiture Ajouté avec succes!");

		alert.showAndWait();
      }catch(IOException ex){
        System.out.println(ex.getMessage());
      }
       }

       else
       {
            Alert alert = new Alert(Alert.AlertType.ERROR);
		alert.setTitle("Ajout Voiture");

		// alert.setHeaderText("Results:");
		alert.setContentText("SERIE Existant!");

		alert.showAndWait();
       }
    }
    
    
    
    
    
    private void ajoutervoiture(ActionEvent event) {
        String serie = seriefield.getText();
         String marque = marquefield.getText();
          String model = modelfield.getText();
          String description = descriptionfield.getText();
                    String couleur = couleurfield.getText();

           String prix = prixfield.getText();
       Voiture p1=new Voiture(50,serie,marque,model,description,couleur,prix,img);
       VoitureService ps = new VoitureService();
       ps.ajouterVoiture(p1);
       FXMLLoader loader = new FXMLLoader(getClass().getResource("AjouterVoiture.fxml"));
       try{  
        
       Parent root = loader.load();
        affichage();
      }catch(IOException ex){
        System.out.println(ex.getMessage());
      }
    }
      @FXML
    private void importimage(ActionEvent event) {
        
        FileChooser f=new FileChooser();
        f.getExtensionFilters().add(new FileChooser.ExtensionFilter("jpeg,png files", type));
        File fc=f.showOpenDialog(null);
        
        if(fc != null)
        {   
            System.out.println(fc.getName());
            img=fc.getName();
           FileSystem fileSys = FileSystems.getDefault();
           Path srcPath= fc.toPath();
           Path destPath= fileSys.getPath("C:\\xampp\\htdocs\\imagevoiture\\"+fc.getName());
            try {
                Files.copy(srcPath, destPath, StandardCopyOption.REPLACE_EXISTING);
            } catch (IOException ex) {
                Logger.getLogger(AjouterVoitureController.class.getName()).log(Level.SEVERE, null, ex);
            }
            System.out.println(srcPath.toString());
            Image i = new Image(fc.getAbsoluteFile().toURI().toString());
            importeimage.setImage(i);
            
        }
        
    }
    
    @FXML
    private void modifierVoiturefct(ActionEvent event) {
        String serie = seriefield.getText();
           String marque = marquefield.getText();
              String model = modelfield.getText();
           String m=trantxt.getValue();
                    String couleur = coultxt.getValue();
        String prix = prixfield.getText();
        int prix1=Integer.parseInt(prix);
        
        
              
        
      
      
       
       Voiture p1=new Voiture(50,serie,marque,model,m,couleur,prix1,img);
      VoitureService ps = new VoitureService();
       
       ps.modifierVoiture(p1);
       affichage();
       Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
		alert.setTitle("Modification Voiture");

		// alert.setHeaderText("Results:");
		alert.setContentText("Voiture modifié avec succes");

		alert.showAndWait();
    }
    
  @FXML
    private void supprimerVoiturefct(ActionEvent event) throws SQLException  {
       VoitureService ps = new VoitureService();
        String Serie = seriefield.getText();
         
    
       ps.deletevoiture(Serie);
       affichage();
       Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
		alert.setTitle("Suppression Voiture");

		// alert.setHeaderText("Results:");
		alert.setContentText("Voiture supprimé avec succes");

		alert.showAndWait();
    }

    
    
 @FXML
    private void affichage(){
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
    

     
}
