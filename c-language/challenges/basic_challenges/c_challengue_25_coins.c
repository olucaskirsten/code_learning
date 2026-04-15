#include <stdio.h>

int main() {
    int total = 0, rodada = 0, moedas;

    while (total < 100) {
        printf("Digite a quantidade de moedas coletadas (1 a 10): ");
        scanf("%d", &moedas);

        // validação simples
        if (moedas < 1 || moedas > 10) {
            printf("Valor invalido! Digite entre 1 e 10.\n");
            continue; // volta pro loop sem contar rodada
        }

        total += moedas;
        rodada++;
    }

    printf("\nMeta atingida!\n");
    printf("Foram necessarias %d rodadas para acumular %d moedas.\n", rodada, total);

    return 0;
}

