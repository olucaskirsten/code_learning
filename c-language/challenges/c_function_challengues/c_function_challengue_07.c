/* 5 – Verificação de matriz identidade
Uma matriz identidade é uma matriz quadrada onde os elementos da diagonal
principal são 1 e os demais são 0. Escreva um programa que leia uma matriz 4x4,
diga se ela é uma matriz identidade e exiba a matriz formatada.

Exemplo:
Matriz identidade? SIM  
1   0   0   0  
0   1   0   0  
0   0   1   0  
0   0   0   1 */

/* 5 – Verificação de matriz identidade Uma matriz identidade é uma matriz quadrada onde os elementos da diagonal principal são 1 e os demais são 0. Escreva um programa que leia uma matriz 4x4, diga se ela é uma matriz identidade e exiba a matriz formatada. Exemplo: Matriz identidade? SIM 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 */
#include <stdio.h>
int main() {
    int matriz[4][4];
    int identidade = 1;
    
    for (int i = 0; i < 4; i++)
        for (int j = 0; j < 4; j++) {
            scanf("%d", &matriz[i][j]);
            
            if ((i == j && matriz[i][j] != 1) || (i != j && matriz[i][j] != 0)) {
            	identidade = 0;
			}
		}

    if (identidade) {
        printf("\nMatriz identidade? SIM\n\n");
    } else {
        printf("\nMatriz identidade? NAO\n\n");
    }
    
    for (int i = 0; i < 4; i++) {
        for (int j = 0; j < 4; j++) {
            printf("%3d ", matriz[i][j]);
        }
        printf("\n");
    }
    
    return 0;
}

