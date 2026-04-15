#include <stdio.h>

int main() {
    int qtdCarros;

    printf("Digite quantos carros serao registrados: ");
    scanf("%d", &qtdCarros);

    // Estrutura para guardar os dados de cada carro
    char modelo[50];
    int ano, funcionando;

    for (int i = 0; i < qtdCarros; i++) {
        printf("\n--- Registro do carro %d ---\n", i + 1);

        printf("Digite o modelo do carro: ");
        scanf(" %[^\n]", modelo); // Lê string com espaços

        printf("Digite o ano de fabricacao: ");
        scanf("%d", &ano);

        printf("O carro esta funcionando normalmente? (1 - Sim / 0 - Nao): ");
        scanf("%d", &funcionando);

        // Verificações de acordo com as regras
        if (ano < 2005 && funcionando == 0) {
            printf("O carro %s precisa de REPAROS URGENTES!\n", modelo);
        } else if (ano < 2005 && funcionando == 1) {
            printf("O carro %s e antigo, recomenda-se uma revisao!\n", modelo);
        } else if (ano >= 2005 && funcionando == 0) {
            printf("O carro %s precisa de manutencao!\n", modelo);
        } else {
            printf("O carro %s esta em boas condicoes!\n", modelo);
        }
    }

    return 0;
}

