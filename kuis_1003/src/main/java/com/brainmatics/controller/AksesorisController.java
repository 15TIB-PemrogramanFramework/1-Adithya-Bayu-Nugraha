/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.brainmatics.controller;

import com.brainmatics.entity.Aksesoris;
import com.brainmatics.service.AksesorisService;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

/**
 *
 * @author Hendro Steven
 */
@RestController
@RequestMapping("/aksesoris")
public class AksesorisController {
    
    @Autowired
    private AksesorisService aksesorisService;
    
    @RequestMapping(method = RequestMethod.POST)
    public Aksesoris insertOrUpdate(@RequestBody Aksesoris aksesoris){
        return aksesorisService.insertOrUpdate(aksesoris);
    }
    @RequestMapping(method = RequestMethod.GET)
    public List<Aksesoris> findAll(){
        return aksesorisService.findAll();
    }
  
}
