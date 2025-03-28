import flet as ft

def main(page: ft.Page):
    # Configurações iniciais da página
    page.title = 'Contador'
    page.window.resizable = False
    page.window.center() # Centraliza a janela
    page.window.width = 500 # Largura da janela
    page.window.height = 700 # Altura da janela
    page.window_icon = ft.Icon(name='plus_one', size=32) # Ícone da janela
    page.vertical_alignment = ft.MainAxisAlignment.CENTER # Alinhamento vertical

    # Texto inicial
    texto = ft.Text(
        value='Insira um Valor Clicando Nos Botões + e -',
        style=ft.TextStyle(weight=ft.FontWeight.BOLD),  # Texto em negrito
    )

    # Campo de texto para mudar a quantidade
    numero = ft.TextField(
        value='0',
        height=65,
        width=180,
        text_align=ft.TextAlign.CENTER,
        text_style=ft.TextStyle(weight=ft.FontWeight.BOLD),
        text_size=16,
        bgcolor=ft.colors.CYAN,
        border=ft.InputBorder.UNDERLINE,  # Borda inferior
        counter_text='Limite 5',
        color=ft.colors.WHITE,
        input_filter=ft.NumbersOnlyInputFilter(),
        read_only=True,  # Desabilitar edição
    )

    # Função para subtrair 1 do valor
    def sub(e):
        if int(numero.value) > 0:
            numero.value = str(int(numero.value) - 1)
            numero.error_text = None
        else:
            numero.error_text = "Valor Inválido"
        page.update()

    # Função para adicionar 1 ao valor
    def soma(e):
        if int(numero.value) < 5:
            numero.value = str(int(numero.value) + 1)
            numero.error_text = None
        else:
            numero.error_text = "Máximo 5"
        page.update()

    # Adiciona o texto à página
    page.add(ft.Row(controls=[texto],alignment=ft.MainAxisAlignment.CENTER,))

    # Adiciona os botões e o campo de texto à página
    page.add(
        ft.Row(
            controls=[
                ft.IconButton(icon=ft.icons.REMOVE_CIRCLE_OUTLINE_ROUNDED, on_click=sub),
                numero,
                ft.IconButton(icon=ft.icons.ADD_CIRCLE_OUTLINE_ROUNDED, on_click=soma),
            ],
            alignment=ft.MainAxisAlignment.CENTER, # Alinhamento horizontal
        )
    )

    # Atualiza a página
    page.update()

ft.app(target=main)