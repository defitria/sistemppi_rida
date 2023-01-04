<?php

function denied_admin()
{
    $ci = &get_instance();
    if ($ci->session->userdata('role_id') == '1') {
        redirect(base_url('unauthorized'));
    }
}

function denied_perawat()
{
    $ci = &get_instance();
    if ($ci->session->userdata('role_id') == '2') {
        redirect(base_url('unauthorized'));
    }
}

function denied_pasien()
{
    $ci = &get_instance();
    if ($ci->session->userdata('role_id') == '3') {
        redirect(base_url('unauthorized'));
    }
}
