var builder = WebApplication.CreateBuilder(args);

builder.Services.AddControllers();

builder.Services
    .AddEndpointsApiExplorer()
    .AddSwaggerGen();

var app = builder.Build();

if (app.Environment.IsDevelopment())
{
    app.UseSwagger();
    app.UseSwaggerUI();
}

app.UseHttpsRedirection();

app.MapControllers();

var livros = new List<Livro>();

// ADICIONAR
app.MapPost("/livros", (Livro l) =>
{
    livros.Add(l);
    return Results.Ok($"Livro '{l.Titulo}' adicionado com sucesso à biblioteca.");
});

// LISTAR
app.MapGet("/livros", () =>
{
    return Results.Ok(livros);
});

// BUSCAR POR TÍTULO
app.MapGet("/livros/{titulo}", (string titulo) =>
{
    foreach (var l in livros)
    {
        if (l.Titulo.ToLower() == titulo.ToLower())
        {
            return Results.Ok(l);
        }
    }

    return Results.NotFound($"Livro '{titulo}' não foi encontrado na biblioteca.");
});

// BUSCAR POR DISPONIBILIDADE
app.MapGet("/livros/disponibilidade/{disponibilidade}", (bool disponibilidade) =>
{
    var resultado = new List<Livro>();

    foreach (var l in livros)
    {
        if (l.Disponibilidade == disponibilidade)
        {
            resultado.Add(l);
        }
    }

    if (resultado.Count == 0)
    {
        return Results.NotFound("Nenhum livro com essa disponibilidade foi encontrado.");
    }

    return Results.Ok(resultado);
});

// EMPRESTAR
app.MapPut("/livros/emprestar/{titulo}", (string titulo) =>
{
    foreach (var l in livros)
    {
        if (l.Titulo.ToLower() == titulo.ToLower())
        {
            if (!l.Disponibilidade)
            {
                return Results.BadRequest($"O livro '{titulo}' já está emprestado no momento.");
            }

            l.Disponibilidade = false;

            return Results.Ok($"O livro '{l.Titulo}' foi emprestado com sucesso.");
        }
    }

    return Results.NotFound($"Não foi possível encontrar o livro '{titulo}' para empréstimo.");
});

// DEVOLVER
app.MapPut("/livros/devolver/{titulo}", (string titulo) =>
{
    foreach (var l in livros)
    {
        if (l.Titulo.ToLower() == titulo.ToLower())
        {
            if (l.Disponibilidade)
            {
                return Results.BadRequest($"O livro '{titulo}' já está disponível na biblioteca.");
            }

            l.Disponibilidade = true;

            return Results.Ok($"O livro '{l.Titulo}' foi devolvido com sucesso. Obrigado!");
        }
    }

    return Results.NotFound($"Não foi possível encontrar o livro '{titulo}' para devolução.");
});

app.Run();

class Livro
{
    public string Titulo { get; set; } = string.Empty;
    public int Ano { get; set; }
    public bool Disponibilidade { get; set; }
}