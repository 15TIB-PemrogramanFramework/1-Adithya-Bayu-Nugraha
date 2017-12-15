/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.brainmatics.repo;

import com.brainmatics.entity.Mobil;
import java.util.List;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;

/**
 *
 * @author Hendro Steven
 */
public interface MobilRepo extends CrudRepository<Mobil, Long> {

    @Query("select c from Mobil c")
    public List<Mobil> findAllMobil();
}
