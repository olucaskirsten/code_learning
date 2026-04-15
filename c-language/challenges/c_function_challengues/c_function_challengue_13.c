// Crie uma função que receba a nota de um aluno e imprima: Aprovado (nota >= 6),
// Recuperação (nota >= 4 e < 6), Reprovado (nota < 4)

#include <stdio.h>

void resultadoFinal(float notaAluno) {
	if (notaAluno >= 6) {
		printf("APROVADO\n");
	} else if (notaAluno >= 4 && notaAluno < 6) {
		printf ("RECUPERACAO\n");
	} else {
		printf("REPROVADO\n");
    }
}

int main () {
	float nota;
	
	printf("Digite a Nota do Aluno: ");
	scanf("%f", &nota);
	
	resultadoFinal(nota);
	
	return 0;
}
