# Perfil de instalación Proxecto Palleira.gal Drupal 8

Perfil de instalación [Drupal 8](https://www.drupal.org) para proxecto palleira.gal

## Requirimentos técnicos

No recurso [https://www.drupal.org/docs/8/system-requirements](https://www.drupal.org/docs/8/system-requirements) descríbense o requirimentos mínimo para unha instalación de Drupal 8. Os recomendados para o perfil de instalación palleira.gal son:

* PHP 7
* Base de datos MySQL,SQLite ou PostgreSQL
* Servidor web Apache 2.4 ou Nginx 1.10 ou superior.

### Outros requirimentos

As seguintes ferramentas/utilidades 

* [composer](https://getcomposer.org/download/) : Imprescindible para satisfacer a dependencia da libraría geophp.
* [drush](https://github.com/drush-ops/drush)

## Instalación

No recurso [https://www.drupal.org/docs/8/install](https://www.drupal.org/docs/8/install) descríbese con detalle o proceso de instalación dun sitio web Drupal 8.

### Antes de comezar

Antes de comezar o proceso de instalación vostede debe :

* Servidor web operativo con soporte para Drupal 8
* Crear unha base de datos e obter credenciais de acceso.

### Instalación

## Post-instalación

#### Instalación libraría geophp

```
cd /var/www/palleira
composer require "phayes/geophp"
```

#### Personalización

O proxecto conta cun tema ( theme ) baseado en [Bootstrap para Drupal](https://www.drupal.org/project/bootstrap) que vostede pode configurar e modificar os seguintes aspectos:

##### Portada 

A portada do sitio esta formado por dous elementos : **imaxe de fondo** e **bloques de texto**.

Vostede pode modificar a imaxe de fondo substituindo o arquivo **background.jpg** do

Dende o recurso **/admin/appearance/settings/palleira** vostede por configurar os seguintes elementos dos **bloques de texto** :

* Título
* Texto
* Título ligazón
* Ligazón destino

O arquivo **page--front.html.twig** ubicado no directorio **profiles/palleira_starter/themes/palleira/templates** contén a sintaxe **HTML** e **TWIG** que renderiza o contido da **portada do sitio**. Vostede pode modificar este arquivo para alterar a presentación da portada.


##### Plantilla elemento

[Drupal 8](https://www.drupal.org/8) emprega o motor de plantillas [Twig](https://twig.symfony.com/) . O arquivo **node--elemento--full.html.twig** ubicado no directorio **profiles/palleira_starter/themes/palleira/templates** contén a sintaxe **HTML** e **TWIG** que renderiza o contido dos **elementos** do sitio. Vostede pode modificar este arquivo para alterar a presentación dos elementos.

##### Taxonomía

Este perfil de instalación inclúe os seguintes vocabularios taxonómicos que axudan a clasificar os **elementos** :

* Accesibilidade
* Estado de conservación do elemento
* Propiedade
* Século
* Tipo de protección
* Tipo de elemento
* Uso

**Antes de publicar contido de tipo elemento, vostede debe engadir como mínimo un termo en cada vocabulario, ao tratarse de campos obrigatorios.** Dende o recurso **/admin/structure/taxonomy** pode engadir novos termos de taxonomía.

## Autores

* [Alberto Permuy Leal](https://www.drupal.org/u/apermuy)
