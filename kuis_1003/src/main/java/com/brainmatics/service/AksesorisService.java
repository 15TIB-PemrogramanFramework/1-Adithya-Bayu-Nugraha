/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.brainmatics.service;

import com.brainmatics.entity.Aksesoris;
import com.brainmatics.repo.AksesorisRepo;
import java.util.List;
import javax.transaction.Transactional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

/**
 *
 * @author Hendro Steven
 */
@Service("aksesorisService")
@Transactional
public class AksesorisService {

    @Autowired
    private AksesorisRepo repo;

    public Aksesoris insertOrUpdate(Aksesoris aksesoris) {
        return repo.save(aksesoris);
    }

    public boolean delete(Long id) {
        repo.delete(id);
        return true;
    }

    public List<Aksesoris> findAll() {
        return repo.findAllAksesoris();
    }

    public List<Aksesoris> findByMobil(Long mobilId) {
        return repo.findByMobil(mobilId);
    }

    public List<Aksesoris> findByNama(String nama) {
        return repo.findByNama("%" + nama + "%");
    }
}
