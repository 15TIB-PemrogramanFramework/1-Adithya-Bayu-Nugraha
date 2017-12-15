/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.brainmatics.repo;

import com.brainmatics.entity.Aksesoris;
import java.util.List;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.repository.query.Param;


/**
 *
 * @author Hendro Steven
 */
public interface AksesorisRepo extends CrudRepository<Aksesoris, Long>{
    
    @Query("select p from Aksesoris p")
    public List<Aksesoris> findAllAksesoris();
    
    @Query("select p from Aksesoris p where p.mobil.id= :id")
    public List<Aksesoris> findByMobil(@Param("id") Long id);
    
    @Query("select p from Aksesoris p where LOWER(p.nama) LIKE LOWER(:nama)")
    public List<Aksesoris> findByNama(@Param("nama") String nama);
}
