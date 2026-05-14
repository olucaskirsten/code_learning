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

var contatos = new List<Contato>();

// adicionar
app.MapPost("/contatos", (Contato c) =>
{
    contatos.Add(c);
    return Results.Ok(c);
});

// listar
app.MapGet("/contatos", () => contatos);

// buscar
app.MapGet("/contatos/{nome}", (string nome) =>
{
    foreach (var c in contatos)
    {
        if (c.Nome.ToLower() == nome.ToLower())
        {
            return Results.Ok(c);
        }
    }

    return Results.NotFound("Contato não encontrado");
});

app.Run();

class Contato
{
    public string Nome { get; set; }
    public string Telefone { get; set; }
}