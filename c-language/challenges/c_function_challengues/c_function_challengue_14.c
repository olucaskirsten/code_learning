/* 3 – Soma da diagonal principal

Dada uma matriz 4x4, exiba a soma da diagonal principal.
Exemplo de saída:
Soma da diagonal principal: 34 */

#include <stdio.h>

int main() {
    int matriz[4][4], soma = 0;

    for (int i = 0; i < 4; i++) {
        for (int j = 0; j < 4; j++) {
            scanf("%d", &matriz[i][j]);
            
            if (i == j) {
                soma += matriz[i][j];
            }
        }
    }

    printf("Soma da diagonal principal: %d\n", soma);

    return 0;
}
