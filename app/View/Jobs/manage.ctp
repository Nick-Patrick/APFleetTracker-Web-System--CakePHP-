<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-large-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">


            <!-- Top Nav Section -->
            <ul class="left">

                <li><?php echo $this->Html->link(__('Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
                <li class="divider"></li>
                <li class="active"><?php echo $this->Html->link(__('Manage'), array('controller' => 'jobs', 'action' => 'manage')); ?> </li>
                <li class="divider"></li>

            </ul>
        </section>
    </nav>
</div>

<div class="full-width-content">
    <h2>Manage Jobs <?php echo $this->Html->link(__('Create New Job'), array('controller' => 'jobs','action' => 'addJob'), array('class' => 'small button right')); ?></h2>
    <table class="driver-data" width="100%">
        <tr>
            <th width="200">Name</th>
            <th width="150">Details</th>
            <th width="200">Status</th>
            <th width="200">Assigned To:</th>
            <th width="100"></th>
        </tr>
        <?php
        $i = 1;
            foreach($jobs as $job){ ?>
                <tr>
                <td><?php echo $job['Job']['name'];?></td>
                <td><?php echo $job['Job']['additional_details'];?></td>
                <td><?php echo $job['Job']['status'];?></td>
                <td><?php echo $job['Driver']['first_name'] . " " . $job['Driver']['last_name'];?></td>
                <td style="text-align:right;">
                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'Jobs', 'action' => 'edit', $job['Job']['id']), array('class' => 'button success small')); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Jobs', 'action' => 'delete', $job['Job']['id']), array('class' => 'button small alert'),
                            __('Are you sure you want to delete Vehicle: %s?', $job['Job']['name'])); ?>

                </td>
                </tr>
        <?php
            $i++;
            }
        ?>
    </table>


        </div>
    </div>
</div>
