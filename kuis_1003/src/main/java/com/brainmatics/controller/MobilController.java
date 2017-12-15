/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.brainmatics.controller;

import com.brainmatics.entity.Mobil;
import com.brainmatics.service.MobilService;
import java.util.List;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

/**
 *
 * @author Hendro Steven
 */
@RestController
@RequestMapping("/mobil")
public class MobilController {

    @Autowired
    private MobilService mobilService;

    @RequestMapping(method = RequestMethod.POST)
    public Mobil insert(@RequestBody Mobil mobil) {
        return mobilService.insert(mobil);
    }

    @RequestMapping(method = RequestMethod.PUT)
    public Mobil update(@RequestBody Mobil mobil) {
        return mobilService.update(mobil);
    }

    @RequestMapping(method = RequestMethod.DELETE, value = "/{id}")
    public boolean delete(@PathVariable("id") Long id) {
        return mobilService.delete(id);
    }
    
    @RequestMapping(method = RequestMethod.GET, value = "/{id}")
    public Mobil getById(@PathVariable("id") Long id){
        return mobilService.getById(id);
    }
    
    @RequestMapping(method = RequestMethod.GET)
    public List<Mobil> getAll(){
        return mobilService.getAll();
    }
}
