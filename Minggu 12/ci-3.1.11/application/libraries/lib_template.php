<?php
class lib_template{
    protected $_ci;

    function __construct()
    {
        // get_instance() adalah fungsi yang didefinisikan dalam file inti CodeIgniter. 
        // untuk mendapatkan referensi tunggal ke objek super CodeIgniter saat berada dalam cakupan di luar objek super.
        $this->_ci =& get_instance(); 
    }

    function views($template = NULL, $data = NULL)
    {
        if ($template != NULL) {
            // Bagian $data['head'] berisi data string dari file head.php dari folder views\admin\_template\head.php
            $data['head'] = $this->_ci->load->view(
                'admin/_template/head',
                $data,
                TRUE //Mengubah perilaku default method agar mengembalikan data sebagai string daripada mengirimkannya ke browser.
            );

            // Bagian $data['topbar'] berisi data string dari file topbar.php dari folder views\admin\_template\topbar.php
            $data['topbar'] = $this->_ci->load->view(
                'admin/_template/topbar',
                $data,
                TRUE //Mengubah perilaku default method agar mengembalikan data sebagai string daripada mengirimkannya ke browser.
            );

            // Bagian $data['sidebar'] berisi data string dari file sidebar.php dari folder views\admin\_template\sidebar.php
            $data['sidebar'] = $this->_ci->load->view(
                'admin/_template/sidebar',
                $data,
                TRUE //Mengubah perilaku default method agar mengembalikan data sebagai string daripada mengirimkannya ke browser.
            );

            // Bagian $data['isi'] berisi data string dari file yang dipanggil dalam parameter $template
            $data['isi'] = $this->_ci->load->view(
                $template, 
                $data, 
                TRUE //Mengubah perilaku default method agar mengembalikan data sebagai string daripada mengirimkannya ke browser.
            );

            // Bagian $data['content'] berisi data string dari file content.php dari folder views\admin\_template\content.php
            $data['content'] = $this->_ci->load->view(
                'admin/_template/content',
                $data,
                TRUE //Mengubah perilaku default method agar mengembalikan data sebagai string daripada mengirimkannya ke browser.
            );

            // Bagian $data['footer'] berisi data string dari file footer.php dari folder views\admin\_template\footer.php
            $data['footer'] = $this->_ci->load->view(
                'admin/_template/footer', 
                $data, 
                TRUE //Mengubah perilaku default method agar mengembalikan data sebagai string daripada mengirimkannya ke browser.
            );

            // Bagian $data['template'] berisi data string dari file template.php dari folder views\admin\_template\template.php
            // dimana isi dari views\admin\_template\template.php untuk memanggil $data diatas seperti $data['head'], dll
            echo $data['template'] = $this->_ci->load->view(
                'admin/_template/template', 
                $data, 
                TRUE //Mengubah perilaku default method agar mengembalikan data sebagai string daripada mengirimkannya ke browser.
            );
        }
    }
}
