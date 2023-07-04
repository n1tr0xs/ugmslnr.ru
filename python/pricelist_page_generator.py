class X:
    def __init__(self, name:str, childs:list):
        self.name = name
        self.childs = childs

    def __str__(self):
        return f'''
<tbody>
    <tr>
        <td colspan="4" class='level-1'> {self.name} </td>
    </tr>
                ''' + ''.join(map(str, self.childs)) + '</tbody>'

class XX:
    def __init__(self, name:str, childs:list):
        self.name = name
        self.childs = childs

    def __str__(self):
        return f'''
    <tr class='level-2'>
        <td colspan="4" class='level-2'> {self.name} </td>
    </tr>
                ''' + ''.join(map(str, self.childs))

class XXX:
    def __init__(self, name:str, price:str='', desc:str=''):
        self.name = name
        self.price = price
        self.desc = desc

    def __str__(self):
        return f'''
    <tr class='level-3'>
        <td class='level-3'>  </td>
        <td> {self.name} </td>
        <td> {self.price} </td>
        <td> {self.desc} </td>
    </tr>
                '''

class XX_spec:
    def __init__(self, name:str, price:str='', desc:str=''):
        self.name = name
        self.price = price
        self.desc = desc

    def __str__(self):
        return f'''
    <tr class='level-2'>
        <td class='level-2'>  </td>
        <td> {self.name} </td>
        <td> {self.price} </td>
        <td> {self.desc} </td>
    </tr>
                '''

xx_list = [
    [
        XX( # 1.1
            "Температура воздуха",
            [
                XXX("Температура воздуха в срок/среднедневная температура", "74,14"),
                XXX("Средняя температура воздуха за сутки", ""),
                XXX("Средняя температура воздуха за декаду", ""),
                XXX("Средняя температура воздуха за месяц", ""),
                XXX("Средняя температура воздуха за год", ""),
                XXX("Максимальная/минимальная температура воздуха за сутки", ""),
                XXX("Максимальная/минимальная температура воздуха за декаду", ""),
                XXX("Максимальная/минимальная температура воздуха за месяц", ""),
                XXX("Средняя максимальная/минимальная температура воздуха за месяц", ""),
                XXX("Максимальная/минимальная температура воздуха за год", ""),
                XXX("Средняя максимальная/минимальная температура воздуха за год ", ""),
                XXX("Число дней с температурой выше/ниже заданной градации за год", ""),
            ]
        ),
        XX( # 1.2
            "Температура почвы",
            [
                XXX('Максимальная/минимальная температура на поверхности почвы в срок', ''),
                XXX('Средняя температура на поверхности почвы за сутки', ''),
                XXX('Средняя температура на поверхности почвы за декаду', ''),
                XXX('Средняя температура на поверхности почвы за месяц', ''),
                XXX('Средняя температура на поверхности почвы за год', ''),
                XXX('Максимальная/минимальная на поверхности почвы за сутки', ''),
                XXX('Максимальная/минимальная на поверхности почвы за декаду', ''),
                XXX('Максимальная/минимальная на поверхности почвы за месяц', ''),
                XXX('Максимальная/минимальная на поверхности почвы за год', ''),
                XXX('Число дней с температурой 0&deg; и ниже на поверхности почвы за год', ''),
            ]
        ),
        XX( # 1.3
            'Влажность воздуха',
            [
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
                XXX('', ''),
            ]
        ),
        XX(
            '',
            [

            ]
        ),
        XX(
            '',
            [

            ]
        ),
        XX(
            '',
            [

            ]
        ),
        XX(
            '',
            [

            ]
        ),
        XX(
            '',
            [

            ]
        ),
        XX(
            '',
            [

            ]
        ),
        XX(
            '',
            [

            ]
        ),
        XX(
            '',
            [

            ]
        ),
        XX(
            '',
            [

            ]
        ),
        XX(
            '',
            [

            ]
        )
    ],
    [

    ],
    [

    ],
    [

    ],
    [

    ],
    [

    ],
]

x_names = [
    'Фактическая, в т.ч. оперативная (текущая) метеорологическая информация по запросу Заказчика - 1 пункт наблюдения, 1 срок, 1 элемент',
    'Расчетные метеорологические и климатические характиеристики за многолетний период',
    'Оператвно-прогностичестическая информация',
    'Гидрологическая информация',
    'Агронометрическая информация',
    'Информаия о загрязнении окружающей среды',
]
x_list = map(X, x_names, xx_list)
spec_x = X(
    'Прочие услуги',
    [
        XX_spec('Оформление, вывод на бумажный носитель (печать, копирование)', ''),
        XX_spec('Подготовка и доведение информации по ОЯ', ''),
        XX_spec('Коэффициент рельефа местности', ''),
    ]
)

with open(r'..\pricelist.php', 'w', encoding='utf-8') as fout:
    fout.write(
    '''
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <link rel="stylesheet" href="/css/water.css">
        <link rel="stylesheet" href="/css/menu.css">
        <link rel="stylesheet" href="/css/table-counter.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
      <? include 'header.html'; ?>
      <section>
        <table class='fixed-head counter'>
          <caption> Перечь платных услуг (работ) и их стоимости на гидрометеорологическую продукцию и информацию о состоянии окружающей среды, ее загрязнее на 2023 год </caption>
          <thead>
            <tr>
              <td>№ п/п</td>
              <td>Наименование</td>
              <td>Цена за единицу продукции, без НДС, руб.</td>
              <td>Примечание</td>
            </tr>
          </thead>
    '''
    )

    for x in x_list:
        fout.write(str(x))
    fout.write(str(spec_x))
    fout.write(
    '''
    </table>
</section>
<? include 'footer.html'; ?>
</body>
</html>

    '''
    )

print('Succesfull')
