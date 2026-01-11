<?php

?>
<article class="portfolio" data-page="project">

<header>
  <h2 class="h2 article-title">Project</h2>
</header>

<section class="projects">

  <ul class="filter-list">

    <li class="filter-item">
      <button class="active" data-filter-btn>All</button>
    </li>

    <!-- <li class="filter-item">
      <button data-filter-btn>Web design</button>
    </li>

    <li class="filter-item">
      <button data-filter-btn>Applications</button>
    </li>

    <li class="filter-item">
      <button data-filter-btn>Web development</button>
    </li> -->

  </ul>

  <div class="filter-select-box">

    <button class="filter-select" data-select>

      <div class="select-value" data-selecct-value>Select category</div>

      <div class="select-icon">
        <ion-icon name="chevron-down"></ion-icon>
      </div>

    </button>

    <ul class="select-list">

      <li class="select-item">
        <button data-select-item>All</button>
      </li>

      <!-- <li class="select-item">
        <button data-select-item>Web design</button>
      </li>

      <li class="select-item">
        <button data-select-item>Applications</button>
      </li>

      <li class="select-item">
        <button data-select-item>Web development</button>
      </li> -->

    </ul>

  </div>

  <!-- project list -->
  <ul class="project-list">

    <li class="project-item  active" data-filter-item data-category="web development">
      <a href="https://github.com/Sanjay36yt/Py_Script/blob/main/ip_dect.py" target="_blank">

        <figure class="project-img">
          <div class="project-item-icon-box">
            <ion-icon name="eye-outline"></ion-icon>
          </div>

          <img src="./assets/project/ip_dect.png" alt="finance" loading="lazy">
        </figure>

        <h3 class="project-title">IP-Scanner</h3>

        <p class="project-category">Python</p>

      </a>
    </li>

   

    <li class="project-item  active" data-filter-item data-category="web development">
      <a href="https://github.com/Sanjay36yt/Py_Script/blob/main/port_sc.py" target="_blank">

        <figure class="project-img">
          <div class="project-item-icon-box">
            <ion-icon name="eye-outline"></ion-icon>
          </div>

          <img src="./assets/project/port_scanner.png" alt="finance" loading="lazy">
        </figure>

        <h3 class="project-title">Port-Scanner</h3>

        <p class="project-category">Python</p>

      </a>
    </li>

    <li class="project-item  active" data-filter-item data-category="web development">
      <a href="https://github.com/Sanjay36yt/CCNA_PROJECTS" target="_blank">

        <figure class="project-img">
          <div class="project-item-icon-box">
            <ion-icon name="eye-outline"></ion-icon>
          </div>

          <img src="./assets/project/ccna2.jpg" alt="finance" loading="lazy">
        </figure>

        <h3 class="project-title">VLAN</h3>

        <p class="project-category">Networking</p>

      </a>
    </li>

      

  </ul>

</section>

</article>