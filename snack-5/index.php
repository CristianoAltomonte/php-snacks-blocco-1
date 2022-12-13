<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex provident a, velit dolor ullam quam quisquam laborum officiis reiciendis dolorem fuga incidunt. rerum temporibus fugit quaerat nihil placeat, enim cum.";

$nuovoParagrafo = explode('.', $paragrafo);

foreach ($nuovoParagrafo as $valore) {
    echo "<span>{$valore}</span> <br>";
}
?>