//exercicio 4

#include <stdio.h>

int main() {
	int vitorias, derrotas, empates;
	
	printf("digite o numero de vitorias: ");
	scanf("%d", &vitorias);
	printf("digite o numero de derrotas: ");
	scanf("%d", &derrotas);
	printf("digite o numero de empates: ");
	scanf("%d", &empates);
	
	int ptsVitorias = vitorias * 3;
	int ptsDerrotas = derrotas * 0;
	int ptsEmpates = empates * 1;
	int totalPontos = ptsVitorias + ptsDerrotas + ptsEmpates;
	
	printf("Total de Pontos: %d + %d + %d = %d", ptsVitorias, ptsDerrotas, ptsEmpates, totalPontos);
	
	
	return 0;
}
