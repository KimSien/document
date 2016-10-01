/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.tousan.web;


import com.mycompany.tousan.logic.CustomerLogic;
import com.mycompany.tousan.entity.Customer;

import javax.ejb.EJB;
import javax.faces.view.ViewScoped;
import javax.inject.Named;
import java.io.Serializable;


/**
 *
 * @author user
 */

@Named
@ViewScoped
public class IndexBean implements Serializable {
    
    private String name;
    private String postalCode;
    private String address;
    private String phone;
    private String note;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getPostalCode() {
        return postalCode;
    }

    public void setPostalCode(String postalCode) {
        this.postalCode = postalCode;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getPhone() {
        return phone;
    }

    public void setPhone(String phone) {
        this.phone = phone;
    }

    public String getNote() {
        return note;
    }

    public void setNote(String note) {
        this.note = note;
    }
   
    @EJB
    private CustomerLogic customerLogic;
    
    public String registerInfomation(){
        Customer customer = new Customer();
        customer.setCustomerID(Long.MIN_VALUE);
        customer.setName(this.name);
        customer.setAddress(this.address);
        customer.setPostalCode(this.postalCode);
        customer.setPhone(this.phone);
        customer.setNote(this.note);
        this.customerLogic.register(customer);
        return "thanks.xhtml?faces-redirect=true";
        
    }
    
    
    
}
