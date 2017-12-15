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
@Table(name = "aksesoris_car")
public class Aksesoris implements Serializable {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    @Column(length = 150, nullable = false)
    private String nama;
    private double harga;
    @Column(length = 255, nullable = true)
    private String deskripsi;
    @Column(length = 255, nullable = true)
    private String merek;
    @ManyToOne
    private Mobil mobil;

    /**
     * @return the id
     */
    public Long getId() {
        return id;
    }

    /**
     * @param id the id to set
     */
    public void setId(Long id) {
        this.id = id;
    }

    /**
     * @return the name
     */
    public String getNama() {
        return nama;
    }

    /**
     * @param name the name to set
     */
    public void setNama(String nama) {
        this.nama = nama;
    }

    /**
     * @return the harga
     */
    public double getHarga() {
        return harga;
    }

    /**
     * @param harga the price to set
     */
    public void setHarga(double harga) {
        this.harga = harga;
    }

    /**
     * @return the description
     */
    public String getDeskripsi() {
        return deskripsi;
    }

    /**
     * @param deskripsi the description to set
     */
    public void setDeskripsi(String deskripsi) {
        this.deskripsi = deskripsi;
    }
    
    /**
     * @return the description
     */
    public String getMerek() {
        return merek;
    }

    /**
     * @param merek the description to set
     */
    public void setMerek(String merek) {
        this.merek = merek;
    }

    /**
     * @return the mobil
     */
    public Mobil getMobil() {
        return mobil;
    }

    /**
     * @param mobil the category to set
     */
    public void setMobil(Mobil mobil) {
        this.mobil = mobil;
    }
    
    
}
