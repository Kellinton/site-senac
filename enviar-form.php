<?php
                    if ($ok == 1) {
                      echo $nome . ", sua mensagem foi enviada com sucesso!!! "; //o ponto serve para contratenar, misturar variável "$nome" com o texto "sua mensagem foi enviada com sucesso!!!"
                    }elseif ($ok == 2) {
                      echo $nome . ", erro ao enviar sua mensagem. Tente mais tarde ";
                    }

                    ?>