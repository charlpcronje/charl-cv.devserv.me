<?php
$output = shell_exec('retype build');
echo "<pre>$output</pre>";

echo "Adding always dark mode script";
$index = file_get_contents('public/index.html');
$index = str_replace('</html>','<script>el.classList.add("dark")</script></html>',$index);

echo "Adding Linked in Script";
$index = str_replace('</head>','<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script></head>',$index);

echo "Replace Name with Linked in Block";
/* $index = str_replace('<span class="text-xs whitespace-nowrap">Powered by</span>','<div style="width:100% !important" class="badge-base LI-profile-badge" data-locale="en_US" data-size="medium" data-theme="dark" data-type="VERTICAL" data-vanity="charl-cronje" data-version="v1">
                                                    <a class="badge-base__link LI-simple-link" href="https://za.linkedin.com/in/charl-cronje?trk=profile-badge">
                                                        Charl Cronje
                                                    </a>
                                                </div><span class="text-xs whitespace-nowrap">Powered by</span>',$index);*/
file_put_contents('public/index.html',$index);