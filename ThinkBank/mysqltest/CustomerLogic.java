/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.tousan.logic;

import com.mycompany.tousan.dao.CustomerFacade;
import com.mycompany.tousan.entity.Customer;
import javax.ejb.EJB;
import javax.ejb.Stateless;

/**
 *
 * @author user
 */
@Stateless
public class CustomerLogic {

    // Add business logic below. (Right-click in editor and choose
    // "Insert Code > Add Business Method")
    @EJB
    private CustomerFacade customerDao;
    
    public Customer register(Customer customer){
        this.customerDao.create(customer);
        return customer;
    }
            
}
