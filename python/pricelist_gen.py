class x:
    def __init__(self, name:str, childs:list):
        self.name = name
        self.childs = childs

    def __str__(self):
        return f'''
    <tbody>
        <tr> <td colspan="4" class='level-1'> {self.name} </td> </tr>
                ''' + ''.join(map(str, self.childs)) + '</tbody>'

class xx:
    def __init__(self, name:str, childs:list):
        self.name = name
        self.childs = childs

    def __str__(self):
        return f'''<tr class='level-2'> <td colspan="4" class='level-2'> {self.name} </td> </tr>''' + ''.join(map(str, self.childs))

class xxx:
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
    <td> </td>
</tr>
                '''

el = x(
    'Фактическая, в т.ч.',
    [
        xx(
        'Температура воздуха',
        [
            xxx('Температура воздуха в срок/среднедневная температура', '74,14'),
            xxx('Средняя температура воздуха за сутки', ''),
            xxx('Средняя температура воздуха за декаду', ''),
            xxx('Средняя температура воздуха за месяц', ''),
            xxx('Средняя температура воздуха за год', ''),
            xxx('Максимальная/минимальная температура воздуха за сутки', ''),
            xxx('Максимальная/минимальная температура воздуха за декаду', ''),
            xxx('Максимальная/минимальная температура воздуха за месяц', ''),
            xxx('Средняя максимальная/минимальная температура воздуха за месяц', ''),
            xxx('Максимальная/минимальная температура воздуха за год', ''),
            xxx('Средняя максимальная/минимальная температура воздуха за год ', ''),
            xxx('Число дней с температурой выше/ниже заданной градации за год', ''),
        ])
    ]
)

with open('table.txt', 'w') as fout:
    fout.write(str(el))
