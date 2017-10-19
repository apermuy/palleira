<?php

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function palleira_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface &$form_state) {

    $form['front_left_title'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Título portada esquerda'),
        '#default_value' => theme_get_setting('front_left_title'),
        '#description'   => t('Título a amosar no bloque da esquerda na portada do sitio.'),
    );

    $form['front_left_text'] = array(
        '#type' => 'textarea',
        '#title' => t('Texto portada esquerda'),
        '#format' => 'full_html',
        '#default_value' => theme_get_setting('front_left_text'),
        '#description'   => t('Texto a amosar no bloque da esquerda na portada do sitio.'),

    );

    $form['front_left_link_title'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Título ligazón bloque esquerda'),
        '#default_value' => theme_get_setting('front_left_link_title'),
        '#description'   => t("Título a amosar no bloque da esquerda na portada do sitio."),
    );

    $form['front_left_link_target'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Destino ligazón bloque esquerda'),
        '#default_value' => theme_get_setting('front_left_link_target'),
        '#description'   => t("Destino da ligazón do bloque da esquerda na portada do sitio"),
    );

    $form['front_center_title'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Título portada centro'),
        '#default_value' => theme_get_setting('front_center_title'),
        '#description'   => t('Título a amosar no bloque do centro na portada do sitio.'),
    );

    $form['front_center_text'] = array(
        '#type' => 'textarea',
        '#title' => t('Texto portada centro'),
        '#format' => 'full_html',
        '#default_value' => theme_get_setting('front_center_text'),
        '#description'   => t('Texto a amosar no bloque do centro na portada do sitio.'),

    );

    $form['front_center_link_title'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Título ligazón bloque centro'),
        '#default_value' => theme_get_setting('front_center_link_title'),
        '#description'   => t("Título a amosar no bloque do centro na portada do sitio."),
    );

    $form['front_center_link_target'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Destino ligazón bloque centro'),
        '#default_value' => theme_get_setting('front_center_link_target'),
        '#description'   => t("Destino da ligazón do bloque do centro na portada do sitio"),
    );

    $form['front_right_title'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Título portada dereita'),
        '#default_value' => theme_get_setting('front_right_title'),
        '#description'   => t('Título a amosar no bloque da dereita na portada do sitio.'),
    );

    $form['front_right_text'] = array(
        '#type' => 'textarea',
        '#title' => t('Texto portada dereita'),
        '#format' => 'full_html',
        '#default_value' => theme_get_setting('front_right_text'),
        '#description'   => t('Texto a amosar no bloque da dereita na portada do sitio.'),
    );

    $form['front_right_link_title'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Título ligazón bloque dereita'),
        '#default_value' => theme_get_setting('front_right_link_title'),
        '#description'   => t("Título a amosar no bloque da dereita na portada do sitio."),
    );

    $form['front_right_link_target'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Destino ligazón bloque dereita'),
        '#default_value' => theme_get_setting('front_right_link_target'),
        '#description'   => t("Destino da ligazón do da dereita na portada do sitio"),
    );

}
