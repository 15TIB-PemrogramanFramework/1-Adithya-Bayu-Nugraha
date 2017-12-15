/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.brainmatics.service;

import com.brainmatics.entity.Mobil;
import com.brainmatics.repo.MobilRepo;
import java.util.List;
import javax.transaction.Transactional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

/**
 *
 * @author Hendro Steven
 */
@Service("mobilService")
@Transactional
public class MobilService {

    @Autowired
    private MobilRepo repo;

    public Mobil insert(Mobil mobil) {
        return repo.save(mobil);
    }
    
    public Mobil update(Mobil mobil) {
        return repo.save(mobil);
    }
    
    public boolean delete(Long id){
        repo.delete(id);
        return true;
    }
    
    public Mobil getById(Long id){
        return repo.findOne(id);
    }
    
    public List<Mobil> getAll(){
        return repo.findAllMobil();
    }
}
