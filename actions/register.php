<?php
if (isset($_POST['nome']) && isset($_POST['dt_nascimento'])) {
    try {
        $name = addslashes($_POST['nome']);
        $birthday = $_POST['dt_nascimento'];

        $json_file = '../inc/persons.json';
        $json_data = file_get_contents($json_file);

        $users = json_decode($json_data, true);

        $new_user = array(
            'id' => count($users) + 1,
            'nome' => $name,
            'dt_nascimento' => $birthday,
        );

        $users[] = $new_user;

        $new_json_data = json_encode($users, JSON_PRETTY_PRINT);


        if (file_put_contents($json_file, $new_json_data) !== false) {
            header('Location: ../index.php');
        } else {
            echo 'Erro no arquivo: ' . $json_file;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
