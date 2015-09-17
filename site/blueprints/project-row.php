<?php if(!defined('KIRBY')) exit ?>

title: Project Row
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type: title
  rowcolour:
    label: Row colour
    type: text
    placeholder: Enter a hex value
    width: 1/4
  textcolour:
    label: Text colour
    type: text
    placeholder: Enter a hex value
    width: 1/4    
  text:
    label: Text
    type: textarea     
  imagery:
    label: Images
    type: url
    placeholder: Enter image URL    