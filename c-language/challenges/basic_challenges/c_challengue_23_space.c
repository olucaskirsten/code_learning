#include <stdio.h>

int main() {
    int N;
    printf("Digite o valor de N: ");
    scanf("%d", &N);

    for (int i = 1; i <= N; i++) {
        // Espaços à esquerda
        for (int j = 1; j <= N - i; j++) {
            printf(" ");
        }
        // Asteriscos
        for (int k = 1; k <= 2 * i - 1; k++) {
            printf("*");
        }
        printf("\n");
    }

    return 0;
}

