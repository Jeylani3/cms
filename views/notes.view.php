   <?php include 'partials\header.php'; ?>
   <?php include 'partials\nav.php'; ?>
   <?php include 'partials\banner.php'; ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1>You are in Notes</h1>
        <div>
            <table class="border border-gray-300 divide-y divide-gray-200">
                <thead>
                    <tr class="bg-gray-600 text-white">

<!--                      --><?php //foreach ($columns as $column) : ?>
<!--                            <th class="bg-amber-300 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">-->
<!--                                --><?php //= htmlspecialchars($column) ?>
<!--                            </th>-->
<!--                        --><?php //endforeach; ?>
                        <th class="px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider"><?= $columns['name'] ?></th>
                        <th class="text-center w-72 px-6 py-3 text-left text-xs font-medium  uppercase tracking-wider"><?= $columns['body'] ?></th>
                    </tr>
                </thead>
                <tbody>
                     <?php foreach ($notes as $index => $note) : ?>
                    <tr class="<?php echo $index % 2 == 0 ? 'bg-gray-200' : 'bg-white'; ?>">
                        <td class=" whitespace-nowrap"><?php echo htmlspecialchars($note['name']); ?></td>
                        <td class="whitespace-nowrap">
                            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                                <?= htmlspecialchars($note['body']) ?>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
  </main>
