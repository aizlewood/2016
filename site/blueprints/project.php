<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: true
files:
  sortable: true
fields:
  title:
    label: Title
    type: title
  lede:
    label: Lede
    type: text
  hero:
    label: Hero
    type: url
    placeholder: Enter image URL   
  categories:
    label: Categories
    type: checkboxes
    options:
      corporate-design: Corporate design
      illustration: Illustration
      logo: Logo design
      photography: Photography
      web: Web design
  year:
    label: Year
    placeholder: The year the project was finished…
    type: text
    width: 1/2
  website:
    label: Website
    type: url
    width: 1/2
  text:
    label: Text
    type: textarea     