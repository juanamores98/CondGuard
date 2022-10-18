<?php

namespace App\Controllers;

class authorizedController extends BaseController
{
    public function index()
    {
        //Connect / models
        $db        = db_connect('default');
        $authorizedModel = model('authorizedModel', true, $db);
        $condo_ownerModel = model('condo_ownerModel', true, $db);
        //Get-fill data
        $items['items'] = $authorizedModel->findAll();
        $items['relations'] =  $condo_ownerModel->findAll();
        //Views
        return
            view('templates/header') .
            view('templates/navbar') .
            view('templates/maintenance_begin') .
            view('authorized/list', $items) .
            view('templates/maintenance_end') .
            view('templates/footer');
    }
    public function detail()
    {
        //Connect / models
        $db        = db_connect('default');
        $authorizedModel = model('authorizedModel', true, $db);
        $condo_ownerModel = model('condo_ownerModel', true, $db);
        //Get-fill data
        $id = $this->request->getPostGet('id');
        $items['item'] = $authorizedModel->find($id);
        $items['relations'] =  $condo_ownerModel->findAll();
        //Views
        return
            view('templates/header') .
            view('templates/navbar') .
            view('templates/maintenance_begin') .
            view('authorized/detail', $items) .
            view('templates/maintenance_end') .
            view('templates/footer');
    }
    public function new($error = null, $data = null)
    {
        //Connect / models
        $condo_ownerModel = model('condo_ownerModel', true, $db);
        //Get-fill data 
        $items['relations'] =  $condo_ownerModel->findAll();
        if ($data != null) {
            $items['error'] =  $error;
            $items['item'] = $data;
        }
        //Views
        return
            view('templates/header') .
            view('templates/navbar') .
            view('templates/maintenance_begin') .
            view('authorized/form', $items) .
            view('templates/maintenance_end') .
            view('templates/footer');
    }
    public function edit($error = null, $data = null)
    {

        //Connect / models
        $db        = db_connect('default');
        $authorizedModel = model('authorizedModel', true, $db);
        $condo_ownerModel = model('condo_ownerModel', true, $db);
        //Get-fill data 
        if ($data == null) {
            $id = $this->request->getPostGet('id');
            $items['item'] = $authorizedModel->find($id);
            $items['error'] =  $error;
        } else {
            $items['item'] = $data;
            $items['error'] =  $error;
        }
        $items['relations'] =  $condo_ownerModel->findAll();
        //Enable edit
        $items['edit_enabled'] = true;
        //Views
        return
            view('templates/header') .
            view('templates/navbar') .
            view('templates/maintenance_begin') .
            view('authorized/form', $items) .
            view('templates/maintenance_end') .
            view('templates/footer');
    }

    public function save()
    {
        //Connect / models
        $db        = db_connect('default');
        $authorizedModel = model('authorizedModel', true, $db);
        //Get-fill data
        $data = array(
            'condo_owner_id' => $this->request->getPostGet('condo_owner_id'),
            'identity' => $this->request->getPostGet('identity'),
            'name' => $this->request->getPostGet('name'),
            'vehicle_plate' => $this->request->getPostGet('vehicle_plate'),
            'reason' => $this->request->getPostGet('reason'),
            'phone' => $this->request->getPostGet('phone'),
            'entry_at' => $this->request->getPostGet('entry_at'),
            'out_at' => $this->request->getPostGet('out_at'),
            'expiration_at' => $this->request->getPostGet('expiration_at')
        );

        //Query variable
        $query = null;
        //Validate to edit or create and lookup for existing fields on the data base
        if ($this->request->getPostGet('authorized_id')) {
            $data['authorized_id'] = $this->request->getPostGet('authorized_id');
            $query = $db->Query("SELECT * FROM `authorized` WHERE (`identity` LIKE '" . $data['identity'] . "'  OR `phone` LIKE '" . $data['phone'] . "' OR `vehicle_plate` LIKE '" . $data['vehicle_plate'] . "') AND `authorized_id` NOT LIKE '" . $data['authorized_id'] . "'");
            if ($query->resultID->num_rows != 0) {
                return $this->edit('Identificación,teléfono o placa de vehículo  ya registrado.', $data);
            }
        } else {
            $query = $db->Query("SELECT * FROM `authorized` WHERE (`identity` LIKE '" . $data['identity'] . "'  OR `phone` LIKE '" . $data['phone'] . "' OR `vehicle_plate` LIKE '" . $data['vehicle_plate'] . "')");
            if ($query->resultID->num_rows != 0) {
                return $this->new('Identificación, teléfono o placa de vehículo ya registrados.', $data);
            }
        }
        //Save
        $authorizedModel->save($data);
        //Redirect
        return $this->response->redirect(base_url('authorized'));
    }
    public function delete()
    {
        //Connect / models
        $db        = db_connect('default');
        $authorizedModel = model('authorizedModel', true, $db);
        //Deactivate data
        $id = $this->request->getPostGet('id');
        $authorizedModel->delete($id);
        //Redirect
        return $this->response->redirect(base_url('authorized'));
    }
}