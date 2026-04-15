/* 2 – Média por linha

Registre as notas de 3 alunos em 4 provas. Depois, calcule e exiba a média de cada aluno.

Exemplo de saída:
Aluno 1, Prova 1: 10
Aluno 1, Prova 2: 9.5
Aluno 1, Prova 3: 7
Aluno 1, Prova 4: 5.5
Media do aluno 1: 8.00
Aluno 2, Prova 1: 9
Aluno 2, Prova 2: 7.5
Aluno 2, Prova 3: 8.5
Aluno 2, Prova 4: 9
Media do aluno 2: 8.50
Aluno 3, Prova 1: 10
Aluno 3, Prova 2: 7.5
Aluno 3, Prova 3: 3.5
Aluno 3, Prova 4: 2.5
Media do aluno 3: 5.88 */

#include <stdio.h>

int main() {
    float notas[3][4], soma;

    for (int i = 0; i < 3; i++) {
        soma = 0;
        for (int j = 0; j < 4; j++) {
            printf("Aluno %d, Prova %d: ", i + 1, j + 1);
            scanf("%f", &notas[i][j]);
            soma += notas[i][j];
        }

        printf("\nMedia do aluno %d: %.2f\n\n", i + 1, soma / 4);
    }

    return 0;
}



