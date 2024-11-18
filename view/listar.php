<?php foreach ($tarefas as $tarefa): ?>
    <tr>
        <td><?php echo htmlspecialchars($tarefa['id_tarefa']); ?></td>
        <td><?php echo htmlspecialchars($tarefa['descricao_tarefa']); ?></td>
        <td><?php echo htmlspecialchars($tarefa['conteudo_estudado']); ?></td>
        <td><?php echo htmlspecialchars($tarefa['responsavel']); ?></td>
        <td><?php echo htmlspecialchars($tarefa['data_inicio']); ?></td>
        <td><?php echo htmlspecialchars($tarefa['data_conclusao']); ?></td>
        <td><?php echo htmlspecialchars($tarefa['status']); ?></td>

        <td><a href="delete.php?id=<?= $tarefa['id_tarefa'] ?>">Deletar tarefa</a></td>

    </tr>
<?php endforeach; ?>