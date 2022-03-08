<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Perangkat_keras extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_perangkat');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Data Perangkat Keras',
            'perangkat' => $this->m_perangkat->perangkat(),
            'isi' => 'layout/backend/perangkat_keras/v_perangkat_keras'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    // Add a new item
    public function add()
    {
        $this->form_validation->set_rules('nama_produk', 'nama perangkat', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array(
            'required' => 'Mohon Untuk Diisi',
        ));
        $this->form_validation->set_rules('harga', 'Harga Prangkat', 'required|numeric', array(
            'required' => 'Mohon Untuk Diisi',
            'numeric' => 'Mohon Diisi dengan Angka'
        ));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
            'required' => 'Mohon Untuk Diisi'
        ));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|ico';
            $config['max_size'] = '5000';
            $this->upload->initialize($config);
            $field_name = 'gambar';
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Data Perangkat Keras',
                    'isi' => 'layout/backend/perangkat_keras/v_add'
                );
                $this->load->view('layout/backend/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assests/gambar' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'nama_produk' => $this->input->post('nama_produk'),
                    'harga' => $this->input->post('harga'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' =>  $upload_data['uploads']['file_name']
                );
                $this->m_perangkat->add($data);
                $this->session->set_flashdata('pesan', 'Berhasil Ditambahkan');
                redirect('perangkat_keras');
            }
        }
        $data = array(
            'title' => 'Tambah Paket',
            'isi' => 'layout/backend/perangkat_keras/v_add'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Update one item
    public function update($id_perangkat = NULL)
    {
        $this->form_validation->set_rules('nama_produk', 'nama perangkat', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array(
            'required' => 'Mohon Untuk Diisi',
        ));
        $this->form_validation->set_rules('harga', 'Harga Prangkat', 'required|numeric', array(
            'required' => 'Mohon Untuk Diisi',
            'numeric' => 'Mohon Diisi dengan Angka'
        ));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
            'required' => 'Mohon Untuk Diisi'
        ));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|ico';
            $config['max_size'] = '5000';
            $this->upload->initialize($config);
            $field_name = 'gambar';
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Data Perangkat Keras',
                    'perangkat' => $this->m_perangkat->detail($id_perangkat),
                    'isi' => 'layout/backend/perangkat_keras/v_edit'
                );
                $this->load->view('layout/backend/v_wrapper', $data, FALSE);
            } else {
                $perangkat = $this->m_perangkat->detail($id_perangkat);
                if ($perangkat->gambar !== "") {
                    unlink('./assets/gambar/' . $perangkat->gambar);
                }

                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assests/gambar' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_perangkat' => $id_perangkat,
                    'nama_produk' => $this->input->post('nama_produk'),
                    'harga' => $this->input->post('harga'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' =>  $upload_data['uploads']['file_name']
                );
                $this->m_perangkat->update($data);
                $this->session->set_flashdata('pesan', 'Berhasil Diupdate');
                redirect('perangkat_keras');
            }
            $data = array(
                'id_perangkat' => $id_perangkat,
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
            );
            $this->m_perangkat->update($data);
            $this->session->set_flashdata('pesan', 'Berhasil Diupdate');
            redirect('perangkat_keras');
        }
        $data = array(
            'title' => 'Edit Paket',
            'perangkat' => $this->m_perangkat->detail($id_perangkat),
            'isi' => 'layout/backend/perangkat_keras/v_edit'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Delete one item
    public function delete($id_perangkat = NULL)
    {
        $perangkat = $this->m_perangkat->detail($id_perangkat);
        if ($perangkat->gambar !== "") {
            unlink('./assets/gambar/' . $perangkat->gambar);
        }
        $data = array('id_perangkat' => $id_perangkat,);
        $this->m_perangkat->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('perangkat_keras');
    }
}

/* End of file Perangkat_keras.php */
