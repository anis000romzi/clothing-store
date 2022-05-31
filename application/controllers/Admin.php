<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model', 'admin');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Overview';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['member'] = $this->admin->getUser();
        $data['clothing'] = $this->admin->getClothing();
        $data['num_user'] = $this->db->get('user')->num_rows();
        $data['num_item'] = $this->db->get('clothing')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function item()
    {
        $data['title'] = 'Item Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['clothing'] = $this->admin->getClothing();
        $data['type'] = $this->db->get('type')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/item', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'type_id' => $this->input->post('type'),
                'price' => $this->input->post('price'),
                'stock' => $this->input->post('stock')
            ];
            $this->db->insert('clothing', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                     New item added
                </div>'
            );
            redirect('admin/item');
        }
    }

    public function edititem($item_id)
    {
        $data['title'] = 'Edit Item';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['clothing'] = $this->admin->getClothingById($item_id);
        $data['type'] = $this->db->get('type')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edititem', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'type_id' => $this->input->post('type'),
                'stock' => $this->input->post('stock')
            ];

            $this->db->where('id', $item_id);
            $this->db->update('clothing', $data);
            redirect('admin/item');
        }
    }

    public function deleteitem($delete_item_id)
    {
        $this->db->delete('clothing', ['id' => $delete_item_id]);
        redirect('admin/item');
    }

    public function user()
    {
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['member'] = $this->admin->getUserById($data['user']['id']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/member', $data);
        $this->load->view('templates/footer');
    }

    public function editusers($user_id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editmember', $data);
            $this->load->view('templates/footer');
        } else {
            $role = $this->input->post('role_id');
            $is_active = $this->input->post('is_active');

            $this->db->set('role_id', $role);
            $this->db->set('is_active', $is_active);
            $this->db->where('id', $user_id);
            $this->db->update('user');
            redirect('admin/user');
        }
    }

    public function deleteuser($delete_user_id)
    {
        $this->db->delete('user', ['id' => $delete_user_id]);
        redirect('admin/user');
    }
}
