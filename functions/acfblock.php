<?php
class ACFBlock
{
  public $name;

  function __construct($name)
  {
    $this->name = $name;
    add_action('init', [$this, 'register_acf_blocks']);
    $this->addBlockarray();
  }


  function register_acf_blocks()
  {
    register_block_type(THEMEPATH . "/acf-blocks/{$this->name}");
  }

  function addBlockarray()
  {
    global $allowedBlocks;
    array_push($allowedBlocks, "acf/{$this->name}");
  }
}
new ACFblock("hero");
new ACFblock("image-text");
new ACFblock("features");
new ACFblock("blocks");
new ACFblock("text-features");
new ACFblock("project-slider");
new ACFblock("bg-image-hero");
new ACFblock("one-column");
new ACFblock("image-gallery");
new ACFblock("contactform");
