/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.brainmatics.entity;

import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

/**
 *
 * @author Hendro Steven
 */
@Entity
@Table(name = "mobil_category")
public class Mobil implements Serializable {    

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    @Column(length = 100, nullable = false, unique = true)
    private String model;
    @Column(length = 255, nullable = true)
    private String stock;
    @Column(length = 255, nullable = true)
    private String tahun;
    @ManyToOne
    private Mobil mobil;

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    /**
     * @return the model
     */
    public String getModel() {
        return model;
    }

    /**
     * @param model the name to set
     */
    public void setModel(String model) {
        this.model = model;
    }

    /**
     * @return the stock
     */
    public String getStock() {
        return stock;
    }

    /**
     * @param stock the description to set
     */
    public void setStock(String stock) {
        this.stock = stock;
    }

    /**
     * @return the name
     */
    
    /**
     * @return the stock
     */
    public String getTahun() {
        return tahun;
    }

    /**
     * @param tahun the description to set
     */
    public void setTahun(String tahun) {
        this.tahun = tahun;
    }

    /**
     * @return the name
     */
    
}
