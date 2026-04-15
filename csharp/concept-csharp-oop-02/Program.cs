using System;

public class Livro
{
    public string Titulo;
    public double Preco;

    public Livro(string titulo, double preco) {
        Titulo = titulo;
        Preco = preco;
    }
}

public class Carrinho {
    Livro[] livros = new Livro[100];
    int contador = 0;

    public void AdicionarLivro(Livro livro) {
        if (contador < livros.Length) {
            livros[contador] = livro;
            contador++;
        } else {
            Console.WriteLine("Carrinho cheio!");
        }
    }

    public void ExibirCarrinho() {
        Console.WriteLine("Livros no carrinho:");

        for (int i = 0; i < contador; i++) {
            Console.WriteLine($"- {livros[i].Titulo} | R$ {livros[i].Preco}");
        }
    }

    public double CalcularTotal() {
        double total = 0;

        for (int i = 0; i < contador; i++) {
            total += livros[i].Preco;
        }

        return total;
    }

        // Remover livro pelo índice
    public void RemoverLivro(int indice)
    {
        if (indice < 0 || indice >= contador)
        {
            Console.WriteLine("Índice inválido!");
            return;
        }

        for (int i = indice; i < contador - 1; i++)
        {
            livros[i] = livros[i + 1]; // desloca os livros
        }

        livros[contador - 1] = null;
        contador--;
        Console.WriteLine("Livro removido com sucesso!");
    }

    public void RemoverLivro(string titulo) {
        for (int i = 0; i < contador; i++) {
            if (livros[i].Titulo == titulo) {
                RemoverLivro(i);
                return;
            }
        }

        Console.WriteLine("Livro não encontrado!");
    }
}

class Program {
    static void Main(string[] args) {
        Carrinho carrinho = new Carrinho();

        carrinho.AdicionarLivro(new Livro("C# Básico", 50.0));
        carrinho.AdicionarLivro(new Livro("POO com C#", 70.0));
        carrinho.AdicionarLivro(new Livro("Algoritmos", 40.0));

        carrinho.ExibirCarrinho();

        Console.WriteLine($"Total: R$ {carrinho.CalcularTotal()}");

        Console.WriteLine("\nRemovendo livro 'POO com C#' pelo título...");
        carrinho.RemoverLivro("POO com C#");

        carrinho.ExibirCarrinho();
        Console.WriteLine($"Total: R$ {carrinho.CalcularTotal()}");
    }
}