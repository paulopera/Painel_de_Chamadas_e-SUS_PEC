<?php
 goto SXnBi; GPNvw: echo $incorreta; goto WVIM1; o5avW: ?>
<div class="container-fluid d-flex justify-content-center"><div class="col-12 alert alert-light col-lg-8 m-4 row"><form method="post"><h1>Digite sua senha para acessar as configurações</h1><h4>Senha padrão: admin</h4><div class="row"><div class="col-12 mt-4 mb-4"><label for="password">Digite a senha:</label> <input autofocus class="form-control p-2"id="password"name="password"required type="password"></div><div class="col-12"><button class="form-control p-2 btn btn-success"type="submit">Confirmar</button></div><div class="col-12 mt-4"><?php  goto GPNvw; fcfZ9: session_start(); goto rPUot; SXnBi: ?>
<!doctypehtml><html lang="en"><head><meta charset="UTF-8"><meta content="width=device-width,initial-scale=1"name="viewport"><title>Editar Painel de Chamadas</title><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"rel="stylesheet"crossorigin="anonymous"integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"rel="stylesheet"><link href="index.css"rel="stylesheet"></head><body><?php  goto fcfZ9; HetJu: if ($_SERVER["\122\x45\x51\x55\105\123\124\137\x4d\105\x54\110\117\104"] === "\120\x4f\123\x54") { $inputPassword = $_POST["\160\141\163\x73\x77\157\x72\x64"]; $configPath = "\x2e\x2f\153\x65\171\137\160\x61\163\163\x5f\143\157\x6e\x66\151\147\x2e\x6a\x73\x6f\x6e"; $configData = json_decode(file_get_contents($configPath), true); $correctPassword = $configData["\155\171\x5f\153\x65\171\x57\x6f\x72\144\137\x70\141\x73\163"]; if ($inputPassword === $correctPassword) { $_SESSION["\x6c\x6f\x67\147\145\144\x49\156"] = true; header("\x4c\157\x63\141\164\x69\157\x6e\72\x20\x63\x6f\156\x66\151\147\x2e\160\150\160"); die; } else { session_destroy(); $incorreta = "\123\145\156\x68\x61\x20\151\156\x63\157\x72\x72\145\164\141\41"; } } goto o5avW; rPUot: $incorreta = ''; goto HetJu; WVIM1: ?>
</div></div></form></div></div></body></html>