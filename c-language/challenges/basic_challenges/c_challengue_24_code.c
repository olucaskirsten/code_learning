#include <stdio.h>

int main() {
    int palpite;
    int segredo = 7;

    do {
        printf("Adivinhe o numero (entre 1 e 10): ");
        scanf("%d", &palpite);

        if (palpite != segredo) {
            printf("Errado! Tente novamente.\n");
        }

    } while (palpite != segredo);

    printf("Voce acertou!\n");

    return 0;
}

