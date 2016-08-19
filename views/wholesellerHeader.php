                                <table class="invoice-details mdl-data-table  mdl-shadow--2dp">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Estimate No:</th>
                                            <th class="mdl-data-table__cell--non-numeric"><?php echo $invoice["Id"]?></th>
                                        </tr>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric" colspan="4"><h4>Sagar Auto Parts Sales and Services</h4></th>
                                        </tr>
                                        <tr>
                                            <th class="mdl-data-table__cell--non-numeric" colspan="4">GF/12 Dev Archan, Opp Marshall Hotel<br />Near Bonny Travels, Paldi cross road,<br/>Paldi, Ahmebadad<br />Phone: 079-26577569</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Name</td>
                                            <td class="mdl-data-table__cell--non-numeric"><?php echo $invoice["Name"] ?></td>
                                            <td class="mdl-data-table__cell--non-numeric">Date</td>
                                            <td class="mdl-data-table__cell--non-numeric"><?php echo $invoice["InvoiceDate"] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="mdl-data-table__cell--non-numeric">Address </td>
                                            <td colspan="3" class="mdl-data-table__cell--non-numeric"><?php echo $invoice["Address"] ?></td>
                                        </tr>
                                    </tbody>
                                </table>